@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="card shadow w-100">
                @foreach ($errors->all() as $item)
                    <li class="text-danger">{{$item}}</li>
                @endforeach
                <div class="card-body">
                    <form action="{{route('configuration.aksi_edit')}}" enctype="multipart/form-data" method="post">
                    @csrf
                        <h5>Konfigurasi</h5>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" value="{{$config->title_web}}" name="title_web" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control">
                        <img src="{{asset($config->logo)}}" width="100" alt="logo">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" value="{{$config->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Judul Tentang</label>
                        <input type="text" name="title_about" value="{{$config->title_about}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>File Tentang</label>
                        <input type="file" name="file_about" class="form-control">
                        <img src="{{asset($config->file_about)}}" class="mt-2" width="100" alt="logo">
                    </div>
                    <div class="form-group">
                        <label>Dekripsi Tentang</label>
                        <textarea name="description_about" class="form-control" cols="30" rows="10">{{$config->description_about}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Judul Banner Produk</label>
                        <input type="text" value="{{$config->title_product}}" name="title_product" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>File Banner Produk</label>
                        <input type="file" name="file_product" class="form-control">
                        <img src="{{asset($config->file_product)}}" class="mt-2" width="100" alt="logo">
                    </div>
                    <div class="form-group">
                        <label>Dekripsi Banner Produk</label>
                        <textarea name="description_product" class="form-control" cols="30" rows="10">{{$config->description_product}}</textarea>
                    </div>
                    <button class="btn btn-primary">Edit </button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection