<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(){
    $products=Product::get();
    return view('backend.product.index',compact('products'));
}
public function tambah(){
    $category=Category::get();
    return view('backend.product.tambah',compact('category'));
}
public function aksi_tambah(Request $request){
    $request->validate([
        'title'=>'required',
        'price'=>'required',
        'category_id'=>'required',
        'file'=>'required'
    ]);
    $data=[
'title'=>$request->title,
'category_id'=>$request->category_id,
'price'=>$request->price,
'discount'=>$request->discount,
'description'=>$request->description
    ];
    
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        // 939393929.png
        $filename = time() . '.' . $file->getClientOriginalExtension();
        // pindahkan->ke folder public->folder blog
        $file->move(public_path('products'), $filename);
        $data['file'] = 'products/' . $filename;
      }
      Product::insert($data);
      return redirect()->route('backend.product');
}
public function edit($id){
    $category=Category::get();
    $product=Product::where('id',$id)->first();
return view('backend.product.edit',compact('category','product'));    
}
public function aksi_edit(Request $request,$id){
    $request->validate([
        'title'=>'required',
        'price'=>'required',
        'category_id'=>'required'
    ]);
    $data=[
        'title'=>$request->title,
        'category_id'=>$request->category_id,
        'price'=>$request->price,
        'discount'=>$request->discount,
        'description'=>$request->description
            ];
            
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                // 939393929.png
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // pindahkan->ke folder public->folder blog
                $file->move(public_path('products'), $filename);
                $data['file'] = 'products/' . $filename;
              }
              Product::where('id',$id)->update($data);
              return redirect()->route('backend.product');
}
}
