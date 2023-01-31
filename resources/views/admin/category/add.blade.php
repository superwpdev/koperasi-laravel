@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1> Tambah Category</h1>
<form action="{{url('storecategory')}}" method="POST">
    @csrf
    Nama Kategori Baru
    <input name="id" class="form-control" type="hidden" value="{{$listcategory->id}}"><br>
    <input name="category" class="form-control" type="text" value="">Status
    <input name="status" class="form-control" type="text" value=""><br>
<button class="btn btn-primary" type="submit">Add</button>
<a href="{{url('category/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
