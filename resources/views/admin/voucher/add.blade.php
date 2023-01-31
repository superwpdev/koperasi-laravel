@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1> Tambah Voucher</h1>
<form action="{{url('storevoucher')}}" method="POST">
    @csrf
    Nama Voucher 
    <input name="id" class="form-control" type="hidden" value="{{$listvoucher->id}}"><br>
    <input name="voucher_name" class="form-control" type="text" value="">Value
    <input name="value" class="form-control" type="text" value=""> Status<br>
    <input name="status" class="form-control" type="text" value=""><br>
<button class="btn btn-primary" type="submit">Add</button>
<a href="{{url('voucher/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
