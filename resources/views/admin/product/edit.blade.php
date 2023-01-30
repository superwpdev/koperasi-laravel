@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1>Edit Product</h1>
  <form action="{{url('updatemember')}}" method="POST">
    @csrf
    </h3>Nama</h3>
    <input name="id" class="form-control" type="hidden" value="{{$findmember->id}}"><br>
    <input name="name" class="form-control" type="text" value="{{$findmember->name}}"></h3> Alamat</h3><br>
    <input name="address" class="form-control" type="text" value="{{$findmember->address}}"></h3> No. Telephone</h3><br>
    <input name="telp" class="form-control" type="text" value="{{$findmember->telp}}"></h3> Email</h3><br>
    <input name="email" class="form-control" type="text" value="{{$findmember->email}}"><br>
<button class="btn btn-primary" type="submit"> UPDATE</button>
<a href="{{url('member/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
