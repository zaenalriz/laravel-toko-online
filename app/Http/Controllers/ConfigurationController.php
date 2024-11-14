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
  $dataConfig=Configuration::first();
if ($request->hasFile('logo')) {
    $file = $request->file('logo');
    $data['logo'] =  $this->uploadImage($file); // config/namafile;
    $this->hapus_gambar($dataConfig->logo);
  }

  if ($request->hasFile('file_about')) {
    $file = $request->file('file_about');
    $data['file_about'] = $this->uploadImage($file); // config/namafile;
    $this->hapus_gambar($dataConfig->file_about);
  }
  if ($request->hasFile('file_product')) {
    $file = $request->file('file_product');
    $data['file_product']=$this->uploadImage($file) ;// config/namafile
    $this->hapus_gambar($dataConfig->file_product);
  }
Configuration::where('id',1)->update($data);
return redirect()->back();
    }
    protected function uploadImage($file){
        // logo-939393929.png
        $filename = 'file_product-'.time() . '.' . $file->getClientOriginalExtension();
        // pindahkan->ke folder public->folder config
        $file->move(public_path('config'), $filename);
        return 'config/' . $filename;
    }
    protected function hapus_gambar($gambar)
    {
      if (file_exists($gambar)) {
        unlink($gambar);
      }
    }
}
