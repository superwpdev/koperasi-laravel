@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1> Edit Kategori</h1>
<form action="{{url('updatecategory')}}" method="POST">
    @csrf
    Nama Kategori
    <input name="id" class="form-control" type="hidden" value="{{$findcategory->id}}"><br>
    <input name="category" class="form-control" type="text" value="{{$findcategory->category}}">Status<br>
    <input name="status" class="form-control" type="text" value="{{$findcategory->status}}"><br>
<button class="btn btn-primary" type="submit">UPDATE</button>
<a href="{{url('category/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
