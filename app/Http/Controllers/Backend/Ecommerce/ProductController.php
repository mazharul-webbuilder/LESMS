<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    /**
     * Show Products Page
     */
    public function products(): View
    {
        return view('admin.ecommerce.product.products');
    }

    /**
     * Get all products
     */
    public function allProducts(): JsonResponse
    {
        $products = Product::all();

        return DataTables::of($products)
            /*Thumbnail Image Column*/
            ->addColumn('thumbnail_image', function ($product) {
                return '<img src="' . asset('/images/admin/product/small/') .'/' . $product->thumbnail_image . '" alt="' . $product->name . '" class="img-thumbnail" height="50px" width="50px">';
            })
            /*Stock Management Column*/
            ->addColumn('stock_management', function ($product) {
                return '
                     <div class="text-center">
                        <button class="btn stock-btn" style="background-color: #BEADFA" data-id="' . $product->id . '">Stock</button>
                    </div>
                ';
            })
            /*Status Column*/
            ->addColumn('status', function ($product) {
                $statusOptions = [
                    1 => 'Published',
                    0 => 'Unpublished',
                ];

                $statusSelect = '<select class="status-select form-control" style="background: #FFE5E5" data-id="' . $product->id . '">';
                foreach ($statusOptions as $value => $label) { // $value = array_key && $label = published or unpublished
                    $selected = $product->status == $value ? 'selected' : '';
                    $statusSelect .= '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                }
                $statusSelect .= '</select>';

                return $statusSelect;
            })
            /*Action Column*/
            ->addColumn('action', function ($product) {
                return '
                <div class="text-center">
                    <button class="btn btn-primary view-btn" data-id="' . $product->id . '">View</button>
                    <button class="btn btn-warning edit-btn" data-id="' . $product->id . '">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="' . $product->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['thumbnail_image', 'action', 'stock_management', 'status'])
            ->make(true);

    }

    /**
     * Show Product Create Page
     */
    public function createView(): View
    {
        return \view('admin.ecommerce.product.create');
    }

    /**
     * Store Product
     */
    public function store(ProductAddRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();

            $request->merge([
                'slug' => Str::slug($request->name),
                'product_code' => AdminHelper::generateUniqueCode(),
                'thumbnail_image' => $this->storeThumbnail($request),
            ]);

            $product = Product::create($request->all());

            // Store Product Gallery Images
            $this->storeGalleryImages($request, $product->id);

            DB::commit();
            return response()->json([
                'message' => 'Product Added Successfully',
                'status' => Response::HTTP_OK,
                'type' => 'success'
            ]);

        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ]);
        }
    }

    /**
     * Delete a resource
    */
    public function delete(Request $request): JsonResponse
    {
        $productId = $request->productId;

        try {
            DB::beginTransaction();

            $product = Product::find($productId);

            // Delete gallery images
            $galleryImages = Gallery::where('product_id', $productId)->get();
            foreach ($galleryImages as $galleryImage) {
                $galleryFilename = $galleryImage->image;
                $this->deleteImages('images/admin/gallery/', $galleryFilename);
                $galleryImage->delete();
            }

            // Delete product thumbnail images
            $thumbnailFilename = $product->thumbnail_image;
            $this->deleteImages('images/admin/product/', $thumbnailFilename);

            // Finally, delete the product
            $product->delete();

            DB::commit();

            return response()->json([
                'message' => 'Product and associated images deleted successfully',
                'status' => Response::HTTP_OK,
                'type' => 'success'
            ]);

        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ]);
        }
    }

    /**
     * returns all sizes
     */
    public function allSizes(): JsonResponse
    {
        return \response()->json(Size::select(['id', 'name'])->get());
    }

    /**
     * Change Product current Status
     *
     */
    public function changeProductStatus(Request $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $product = Product::find($request->id);
            $product->status = $request->newStatus;
            $product->save();
            DB::commit();

            return response()->json([
                'message' => 'Status Changed Successfully',
                'status' => Response::HTTP_OK,
                'type' => 'success',
            ], Response::HTTP_OK);
        } catch (QueryException $e) {
            DB::rollBack();

            return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }

    /**
     * Store Gallery Images with multiple versions of images
     */
    private function storeGalleryImages($request, $productId): void
    {
        if ($request->hasFile('galleryImages')) {
            foreach ($request->file('galleryImages') as $data) {
                $image = $data;
                $image_name = strtolower(Str::random(10)) . time() . "." . $image->getClientOriginalExtension();
                $original_image_path = public_path() . '/images/admin/gallery/original/' . $image_name;
                $small_image_path = public_path() . '/images/admin/gallery/small/' . $image_name;
                $large_image_path = public_path() . '/images/admin/gallery/large/' . $image_name;
                $medium_image_path = public_path() . '/images/admin/gallery/medium/' . $image_name;
                //Resize Image
                Image::make($image)->save($original_image_path);
                Image::make($image)->resize(240, 160)->save($small_image_path);
                Image::make($image)->resize(1200, 800)->save($large_image_path);
                Image::make($image)->resize(700, 466)->save($medium_image_path);

                $gallery = new Gallery();
                $gallery->product_id = $productId;
                $gallery->image = $image_name;
                $gallery->save();
            }

        }

    }

    /**
     * Store Product thumbnail image
     */
    private function storeThumbnail($request): ?string
    {
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_name = strtolower(Str::random(10)) . time() . "." . $image->getClientOriginalExtension();
            $original_image_path = public_path() . '/images/admin/product/original/' . $image_name;
            $small_image_path = public_path() . '/images/admin/product/small/' . $image_name;
            $large_image_path = public_path() . '/images/admin/product/large/' . $image_name;
            $medium_image_path = public_path() . '/images/admin/product/medium/' . $image_name;

            // Resize Image-
            Image::make($image)->save($original_image_path);
            Image::make($image)->resize(80, 120)->save($small_image_path);
            Image::make($image)->resize(1000, 1200)->save($large_image_path);
            Image::make($image)->resize(700, 500)->save($medium_image_path);

            return $image_name;
        }

        return null;
    }


    /**
     * Delete Images
    */
    private function deleteImages($parentDirectory, $filename): void
    {
        $subdirectories = ['small', 'medium', 'original', 'large'];

        foreach ($subdirectories as $subdirectory) {
            $directory = public_path($parentDirectory . $subdirectory . '/');

            $url = $directory.$filename;

            $filePath = urldecode(parse_url($url, PHP_URL_PATH));

            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }
    }
}
