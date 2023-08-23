<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Str;

class AdminHelper
{

    public static function getImageFilePath($request, $storage_path)
    {
        if ($request->hasFile('image') || $request->hasFile('photo')) {
            $image = $request->hasFile('image') ? $request->file('image') : $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $image->move($storage_path, $image_name);

            return $storage_path. '/'. $image_name;
        }
        return null;
    }

    public static function generateUniqueCode($length = 8)
    {
        $code = Str::random($length, '0123456789');

        // Make sure the code is unique in your database
        while (Product::where('product_code', $code)->first()) {
            $code = Str::random($length, '0123456789');
        }

        return $code;
    }
}
