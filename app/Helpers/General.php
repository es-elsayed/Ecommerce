<?php

use Illuminate\Support\Str;

function upload_image($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = 'assets/images/' . $folder . '/' . $filename;
    return $path;
}
function str_slug($val)
{
    return Str::slug($val,'-');
}
