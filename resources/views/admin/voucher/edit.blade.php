@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<h1> Edit Voucher</h1>
<form action="{{url('updatevoucher')}}" method="POST">
    @csrf
    Nama Voucher
    <input name="id" class="form-control" type="hidden" value="{{$findvoucher->id}}"><br>
    <input name="voucher_name" class="form-control" type="text" value="{{$findvoucher->voucher_name}}">Value<br>
    <input name="value" class="form-control" type="text" value="{{$findvoucher->value}}">Status<br>
    <input name="status" class="form-control" type="text" value="{{$findvoucher->status}}"><br>
<button class="btn btn-primary" type="submit">UPDATE</button>
<a href="{{url('voucher/')}}" class="btn btn-primary">Cancel</a>
    
  </form>
@endsection

@section('script')

@endsection
