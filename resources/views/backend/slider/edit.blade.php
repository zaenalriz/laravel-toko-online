@extends('backend.layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Edit Slider</h2>
            @if ($errors)
                @foreach ($errors->all() as $item)
                    <p class="text-danger"> {{ $item }}</p>
                @endforeach
            @endif
            <form class="user" action="{{ route('backend.slider.aksi_edit',$slider->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" value="{{$slider->title}}" class="form-control form-control-user" aria-describedby="emailHelp"
                        placeholder="Masukan judul">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control editor" placeholder="masukan deskripsi" cols="30" rows="3">{{$slider->description}}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control form-control-user" placeholder="Masukan file">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-user ">
                        Tambah
                    </button>
                </div>

            </form>
        </div>
    </div>
   
@endsection
