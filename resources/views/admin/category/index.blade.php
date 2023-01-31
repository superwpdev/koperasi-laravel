@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<a href="{{url('postcategory/')}}" class="btn btn-primary">Tambah Category</a>
<table class="table table-responsive">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
  @foreach ($res_category as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->category}}</td>
        <td>{{ $item->status }}</td>
        <td> 
            <a class="btn btn-primary" href="{{url('editcategory/'.$item->id)}}">Edit</a> 
            <a class="btn btn-primary" href="{{url('deletecategory/'.$item->id)}}">Delete</a>
        </td>
    </tr>
@endforeach  
</table>

@endsection

@section('script')

@endsection
