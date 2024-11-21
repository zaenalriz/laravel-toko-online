@extends('backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
    </div>
    <div class="card-body">
        <a href="{{route('backend.category.tambah')}}" class="btn btn-primary mb-2">Tambah Kategori</a>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                   @foreach ($category as $item)
                       <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->title}}</td>
                        <td>
                            <a href="" class="btn btn-warning">
                                edit
                            </a>
                        </td>
                       </tr>
                   @endforeach
                </tbody>
                 
            </table>
        </div>
    </div>
</div>
@endsection