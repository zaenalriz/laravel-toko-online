@extends('backend.layouts.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Edit Produk</h2>
            @if ($errors)
                @foreach ($errors->all() as $item)
                    <p class="text-danger"> {{ $item }}</p>
                @endforeach
            @endif

            <form class="user" action="{{ route('backend.product.aksi_edit',$product->id) }}" enctype="multipart/form-data"
                method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" value="{{ $product->title }}" class="form-control form-control-user"
                        aria-describedby="emailHelp" placeholder="Masukan judul">
                </div>
                <div class="form-group">
                    <select name="category_id" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($category as $item)         
                            <option value="{{ $item->id }}" @if ($item->id == $product->category_id) selected @endif>
                                {{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" name="price" value="{{ $product->price }}"
                        class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukan harga">
                </div>
                <div class="form-group">
                    <input type="number" name="discount" value="{{ $product->discount }}"
                        class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukan Diskon">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control editor" placeholder="masukan deskripsi" cols="30" rows="3">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file" accept="image/.jpg, .png, .pdf, .docx"
                        class="form-control form-control-user" placeholder="Masukan file">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-user ">
                        Edit
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
