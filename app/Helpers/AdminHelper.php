<?php

namespace App\Helpers;

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
}
