@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1> Tambah Product</h1>
<form action="{{url('updateproduct')}}" method="POST">
    @csrf
    Kategori ID Produk
    <input name="id" class="form-control" type="hidden" value="{{$findproduct->id}}"><br>
    <input name="id_category" class="form-control" type="text" value="{{$findproduct->id_category}}">Nama Produk<br>
    <input name="product" class="form-control" type="text" value="{{$findproduct->product}}">Description<br>
    <input name="description" class="form-control" type="text" value="{{$findproduct->description}}">Price<br>
    <input name="price" class="form-control" type="text" value="{{$findproduct->price}}">Stock<br>
    <input name="stock" class="form-control" type="text" value="{{$findproduct->stock}}"><br>
<button class="btn btn-primary" type="submit">UPDATE</button>
<a href="{{url('product/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
