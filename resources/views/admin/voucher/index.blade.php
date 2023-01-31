@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<a href="{{url('postvoucher/')}}" class="btn btn-primary">Add Voucher</a>
<table class="table table-responsive">
    <tr>
        <th>No</th>
        <th>Nama Voucher</th>
        <th>Diskon Voucher</th>
        <th>Status Voucher</th>
        <th>Aksi</th>
    </tr>
  @foreach ($res_voucher as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->voucher_name}}</td>
        <td>{{ $item->value }}</td>
        <td>{{ $item->status }}</td>
        <td> 
            <a class="btn btn-primary" href="{{url('editvoucher/'.$item->id)}}">Edit</a> 
            <a class="btn btn-primary" href="{{url('deletevoucher/'.$item->id)}}">Delete</a>
        </td>
    </tr>
@endforeach  
</table>

@endsection

@section('script')

@endsection
