@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1> Tambah Product</h1>
<form action="{{url('storeproduct')}}" method="POST">
    @csrf
</h3> Kategori ID product</h3>
    <input name="id" class="form-control" type="hidden" value="{{$listproduct->id}}"><br>
    <input name="id_category" class="form-control" type="text" value="">Nama Product
    <input name="product" class="form-control" type="text" value=""></h3> Description</h3><br>
    <input name="description" class="form-control" type="text" value=""></h3> Price</h3><br>
    <input name="price" class="form-control" type="text" value=""></h3> Stock</h3><br>
    <input name="stock" class="form-control" type="text" value=""></h3></h3><br>
<button class="btn btn-primary" type="submit">Add</button>
<a href="{{url('product/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
