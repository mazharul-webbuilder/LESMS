@extends('admin.master.master')
@section('title')
    Update | {{$product->name}} | {{ config('app.name') }}
@endsection
@section('page-header-assets')
    <script src="https://cdn.tiny.cloud/1/gpri4wsj1pc87hfxaqzix76t8y94ljhqcbfypun5a8nfdq94/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('content')
    <style>
        #image-container {
            display: flex;
            flex-wrap: wrap;
        }

        .preview-image {
            max-width: 150px;
            max-height: 150px;
            margin: 10px;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18"></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('admin.products')}}">Products</a></li>
                                <li class="breadcrumb-item active">Update</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Product | {{$product->name}} | Edit Form</h4>

                    <form method="POST" id="UpdateForm" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-firstname-input">Product Name*</label>
                                    <input type="text" value="{{$product->name}}" name="name" class="form-control" id="formrow-firstname-input" placeholder="Ex: Iphone 15 Pro Max">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="formrow-email-input">Category</label>
                                    <select name="product_category_id" id="" class="form-control">
                                        <option value=""> ---- Select Category ----</option>
                                        @foreach(\App\Models\ProductCategory::all() as $category)
                                            <option value="{{$category->id}}"
                                                    {{$product->product_category_id === $category->id ? 'selected' : ''}}
                                            >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formrow-inputCity">Brand</label>
                                    <select name="product_brand_id" id="" class="form-control">
                                        <option value=""> ---- Select Brand ----</option>
                                        @foreach(\App\Models\ProductBrand::all() as $brand)
                                            <option value="{{$brand->id}}"
                                                {{$product->product_brand_id === $brand->id ? 'selected' : ''}}
                                            >{{$brand->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formrow-inputState">Purchase Price</label>
                                    <input type="number" value="{{$product->purchase_price}}" name="purchase_price" class="form-control" placeholder="Ex: 25">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="formrow-inputState">Selling Price*</label>
                                    <input type="number" value="{{$product->current_price}}" name="current_price" class="form-control" placeholder="Ex: 30">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="formrow-inputState">Minimum Order Quantity*</label>
                                    <input type="number" value="{{$product->minimum_order_quantity}}" name="minimum_order_quantity" class="form-control" placeholder="Ex: 1">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="formrow-inputState">Thumbnail Image*</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{asset('images/admin/product/small/' . $product->thumbnail_image)}}" alt="" class="preview-image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="galleryImage">Gallery Images</label>
                                    <input type="file" id="images" name="galleryImages[]" multiple accept="image/*" class="form-control">
                                    <div id="existing-image" class=" d-flex flex-row">
                                        @foreach($product->galleryImages as $data)
                                            <div class="">
                                                <img class="preview-image" src="{{asset('images/admin/gallery/small/' . $data->image)}}" alt="{{$product->name}}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div id="image-container"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-lg-12">
                                <div class="form-group ">
                                    <label for="formrow-email-input">Short Description*</label>
                                    <input type="text" value="{{$product->short_description}}" name="short_description" class="form-control" placeholder="Ex: This is my product short description">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group ">
                                    <label for="formrow-email-input">Full Description*</label>
                                    <textarea name="description">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group ">
                                    <label for="formrow-email-input">Privacy Policy</label>
                                    <textarea name="privacy_policy" >{{$product->privacy_policy}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group ">
                                    <label for="formrow-email-input">Return Policy</label>
                                    <textarea name="return_policy">{{$product->return_policy}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-footer-assets')
    <script>
        $(document).ready(function () {
            $('#images').change(function () {
                $('#existing-image').removeClass('d-flex flex-row');
                $('#existing-image').css('display', 'none');
                $('#image-container').empty();

                const files = $(this)[0].files;
                for (const file of files) {
                    const img = $('<img>').addClass('preview-image').attr('src', URL.createObjectURL(file));
                    $('#image-container').append(img);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            /*rich text editor*/
            tinymce.init({
                selector: 'textarea',
                plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
            });
            /*End rich text editor*/

            // product Update
            const UpdateForm = $('#UpdateForm')
            UpdateForm.submit(function (event) {
                event.preventDefault();
                $('#AddError').text('')

                const formData = new FormData(UpdateForm[0]);
                $.ajax({
                    url: '{{ route('admin.product.update') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.status === 200) {
                            Toast.fire({
                                icon: data.type,
                                title: data.message
                            })
                            $('#UpdateForm')[0].reset();
                            $('#image-container').hide(2000);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('error')
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;

                            // Clear previous error messages
                            $('.error-message').remove();

                            // Display error messages for each input field
                            Object.keys(errors).forEach(function(field) {
                                const errorMessage = errors[field][0];
                                const inputField = $('[name="' + field + '"]');
                                inputField.after('<span class="error-message text-danger">' + errorMessage + '</span>');
                            });

                        } else {
                            console.log('An error occurred:', status, error);
                        }
                    }
                })
            })
        })
    </script>
@endsection
