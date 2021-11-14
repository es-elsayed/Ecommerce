<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

function upload_image($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'assets/images/' . $folder . '/' . $filename;
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
    return Str::slug($val,'-');
}
function currency($val)
{
    return $val." $";
}
