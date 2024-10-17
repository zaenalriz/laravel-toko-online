<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
  public function index()
  {
    $blog = Blogs::get();
    return view('backend.blog.index', [
      'blog' => $blog
    ]);
  }
  public function tambah()
  {
    return view('backend.blog.tambah');
  }
  public function aksi_tambah(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'description' => 'required|string',
      'file' => 'nullable|file|mimes:jpg,png,pdf,docx|max:2048'
    ]);
    $data = [
      'title' => $request->title,
      'slug' => Str::slug($request->title),
      'description' => $request->description,
      'created_by' => auth()->user()->id
    ];
    if ($request->hasFile('file')) {
      $file = $request->file('file');
      // 939393929.png
      $filename = time() . '.' . $file->getClientOriginalExtension();
      // pindahkan->ke folder public->folder blog
      $file->move(public_path('blogs'), $filename);
      $data['file'] = 'blogs/' . $filename;
    }
    Blogs::insert($data);
    return redirect()->route('backend.blog');
  }
  public function aksi_hapus($id)
  {
    $ambilDataBlog = Blogs::where('id', $id)->first();
    Blogs::where('id', $id)->delete();
    $this->hapus_gambar($ambilDataBlog->file);
    return redirect()->back();
  }
  protected function hapus_gambar($gambar)
  {
    if (file_exists($gambar)) {
      unlink($gambar);
    }
  }
  public function edit($id)
  {
    $blog = Blogs::where('id', $id)->first();
    $nama = 'adit';
    $sekolah = 'smk ds';
    return view(
      'backend.blog.edit',
      compact('blog', 'nama', 'sekolah')
    );
  }
  public function aksi_edit(Request $request,$id){
    
    $request->validate([
      'title' => 'required|string',
      'description' => 'required|string',
      'file' => 'file|mimes:jpg,png|max:2048'
    ]);
$data=[
  'title'=>$request->title,
  'description'=>$request->description,
  'slug'=>Str::slug($request->title)
];
if($request->hasFile('file')){
  $file=$request->file('file');
  // upload ke folder blog
  //1729139021-blog.png
  $filename=time().'-blog'.'.'.$file->getClientOriginalExtension();
  $file->move(public_path('blogs'),$filename);
// fungsi untuk menambahkan key ke $data
  $data['file']='blogs/'.$filename;
  // hapus gambar
  $ambilDataBlog = Blogs::where('id', $id)->first();
  $this->hapus_gambar($ambilDataBlog->file);

  // dd('file nya ada',$file,time(),$file->getClientOriginalExtension());
}
Blogs::where('id',$id)->update($data);

return redirect()->route('backend.blog');
  }
}
