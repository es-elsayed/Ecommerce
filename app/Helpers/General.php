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
    return File::delete($path);
}
function str_slug($val)
{
    return Str::slug($val,'-');
}
function currency($val)
{
    return $val." $";
}
