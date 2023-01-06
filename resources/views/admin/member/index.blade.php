@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
ini konten member
<table class="table table-responsive">
    <tr>
        <th>No</th>
        <th>name</th>
    </tr>
  @foreach ($res_member as $item)
    <tr>
        <td>{{ $loop->index }}</td>
        <td>{{ $item->name }}</td>
    </tr>
@endforeach  
</table>

@endsection

@section('script')

@endsection
