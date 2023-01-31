@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<a href="{{url('postproduct/')}}" class="btn btn-primary">Tambah Product</a>
<table class="table table-responsive">
    <tr>
        <th>No</th>
        <th>Kategori ID</th>
        <th>Product</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
  @foreach ($res_product as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->id_category }}</td>
        <td>{{ $item->product }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->stock }}</td>
        <td> 
            <a class="btn btn-primary" href="{{url('editproduct/'.$item->id)}}">Edit</a> 
            <a class="btn btn-primary" href="{{url('deleteproduct/'.$item->id)}}">Delete</a>
        </td>
    </tr>
@endforeach  
</table>

@endsection

@section('script')

@endsection
