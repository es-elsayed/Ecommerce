<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

function upload_image($folder, $image)
{
    $path = "assets/images/notfound.jpg";
    if ($image) {
        $image->store('/', $folder);
        $filename = $image->hashName();
        $path = 'assets/images/' . $folder . '/' . $filename;
    }
    return $path;
}
function drop_image($path)
{
    if (file_exists($path) && $path !== "assets/images/notfound.jpg") {
        return File::delete($path);
    }
    return true;
}
function str_slug($val)
{
    return Str::slug($val, '-');
}
function currency($val)
{
    return "$".$val;
}
function un_defined_cat_error($cat)
{
    if ($cat->id === 1 || $cat->name_en === "un-defined") {
        return false;
    }
    return true;
}
