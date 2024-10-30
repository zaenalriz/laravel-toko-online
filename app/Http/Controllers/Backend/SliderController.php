<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;

class SliderController extends Controller
{
  public function index()
  {
    $sliders = Sliders::get();
    return view('backend.slider.index', compact('sliders'));
  }
  public function tambah()
  {
    return view('backend.slider.tambah');
  }
  public function aksi_tambah(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'file' => 'nullable|file|mimes:jpg,png,pdf,docx'
    ]);
    $data = [
      'title' => $request->title,
      'description' => $request->description
    ];
    if ($request->hasFile('file')) {
      $file = $request->file('file');
      // 939393929.png
      $filename = time() . '.' . $file->getClientOriginalExtension();
      // pindahkan->ke folder public->folder blog
      $file->move(public_path('sliders'), $filename);
      $data['file'] = 'sliders/' . $filename;
    }
    Sliders::insert($data);
    return redirect()->route('backend.slider');
  }
  public function hapus($id)
  {
    $ambilDataSlider = Sliders::where('id', $id)->first();
    // delete from sliders where id=$id;
    Sliders::where('id', $id)->delete();
    $this->hapus_gambar($ambilDataSlider->file);
    return redirect()->back();
  }
  protected function hapus_gambar($gambar)
  {
    if (file_exists($gambar)) {
      unlink($gambar);//hapus gambarnya
    }
  }
  public function edit($id){
    $slider=Sliders::where('id',$id)->first();
    $sekolah='smk ds';
    return view('backend.slider.edit',compact('slider','sekolah'));
  }
  public function aksi_edit(Request $request,$id){
    $request->validate([
      'title' => 'required|string',
      'description' => 'required|string',
      'file' => 'file|mimes:jpg,png'
    ]);

$data=[
  'title'=>$request->title,
  'description'=>$request->description
];
if($request->hasFile('file')){
  $file=$request->file('file');
  // upload ke folder blog
  //1729139021-blog.png
  $filename=time().'-slider'.'.'.$file->getClientOriginalExtension();
  $file->move(public_path('sliders'),$filename);
  // fungsi untuk menambahkan key ke $data
  $data['file']='sliders/'.$filename;
  // hapus gambar
  $ambilDataSlider = Sliders::where('id', $id)->first();
  $this->hapus_gambar($ambilDataSlider->file);

  // dd('file nya ada',$file,time(),$file->getClientOriginalExtension());
}
Sliders::where('id',$id)->update($data);

return redirect()->route('backend.slider');

  }
}
