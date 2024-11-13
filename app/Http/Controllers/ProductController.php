<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Configuration;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $categoryId=$request->category;
        if($categoryId==""){
            //select * from products;
            $product=Product::get();
        }else{
            // select * from products where category_id=1
            $product=Product::where('category_id',$categoryId)->get();
        }
        $category=Category::get();
$config=Configuration::first();
         return view('product',compact('category','product','config'));
    }
}
