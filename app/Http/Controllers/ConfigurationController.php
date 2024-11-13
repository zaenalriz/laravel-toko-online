<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index(){
$config=Configuration::first();
        return view('backend.configuration.index',compact('config'));
    }
    public function aksi_edit(Request $request){
$request->validate([
    'title_web'=>'required',
    'phone'=>'required',
    'title_about'=>'required',
    'description_about'=>'required',
    'title_product'=>'required',
    'description_product'=>'required'
]);
$data=[
    'title_web'=>$request->title_web,
    'phone'=>$request->phone,
    'title_about'=>$request->title_about,
    'description_about'=>$request->description_about,
    'title_product'=>$request->title_product,
    'description_product'=>$request->description_product,
];
Configuration::where('id',1)->update($data);
return redirect()->back();
    }
}
