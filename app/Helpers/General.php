<?php

use App\Models\Product;
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
    return "$" . $val;
}
function un_defined_cat_error($cat)
{
    if ($cat->id === 1 || $cat->name_en === "un-defined") {
        return false;
    }
    return true;
}

function getNumbers()
{
    $tax = config('shopping_cart.tax') / 100;
    // $discount = session()->get('coupon')['discount'] ?? 0;
    // $code = session()->get('coupon')['name'] ?? null;
    // $newSubtotal = (Cart::getTotal() - $discount);
    $subTotal = \Cart::getTotal();
    $items = \Cart::getContent();
    $cart_items = $items->pluck('quantity','id');

    $products = Product::whereIn('id', $cart_items->keys())->get();
    $subTotal = 0;
    foreach ($products as $product) {
        $price = $product->sale ? $product->sale_price :  $product->price;
        $price = $price*$cart_items[$product->id];
        $subTotal += $price;
    }

    $newTax = $subTotal * $tax;
    $newTotal = $subTotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'subTotal' => $subTotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
        // 'total_price' => $total_price,
    ]);
}
