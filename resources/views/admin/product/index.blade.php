@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
ini konten product
<table class="table table-responsive">
    <tr>
        <th>No</th>
        <th>product</th>
    </tr>
  @foreach ($res_product as $item)
    <tr>
        <td>{{ $loop->index }}</td>
        <td>{{ $item->product }}</td>
    </tr>
@endforeach  
</table>

@endsection

@section('script')

@endsection
