@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
ini konten product
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
            <a class="btn btn-primary" href="{{url('editmember/'.$item->id)}}">Edit</a> 
            <a class="btn btn-primary" href="{{url('deletemember/'.$item->id)}}">Delete</a>
        </td>
    </tr>
@endforeach  
</table>

@endsection

@section('script')

@endsection
