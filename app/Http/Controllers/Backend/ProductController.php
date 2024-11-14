<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(){
    $products=Product::get();
    return view('backend.product.index',compact('products'));
}
}
