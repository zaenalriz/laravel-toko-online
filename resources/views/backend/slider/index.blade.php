@extends('backend.layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
        </div>
        <div class="card-body">
            <a href="{{route('backend.slider.tambah')}}" class="btn btn-primary mb-2">Tambah slider</a>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                    @foreach ($sliders as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <img width="100" src="{{asset($item->file)}}" alt="">
                            </td>
                            <td>
                                <a href="{{route('backend.slider.edit',$item->id)}}" class="btn btn-warning">edit</a>
                                <form action="{{route('backend.slider.hapus',$item->id)}}" method="post">
                                  @csrf
                                    <button class="btn btn-danger">hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection