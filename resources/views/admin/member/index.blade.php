@extends('admin/layout.layout')
@section('css')

@endsection

@section('konten')
<a href="{{url('addmember/')}}" class="btn btn-primary">Add Member</a>
<table class="table table-responsive">
    <tr>
        <th>Nama</th>
        <th>Address</th>
        <th>No. Telephone</th>
        <th>email</th>
        <th>Action</th>
    </tr>
  @foreach ($res_member as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->telp }}</td>
        <td>{{ $item->email }}</td>
        <td> 
            <a class="btn btn-primary" href="{{url('editmember/'.$item->id)}}">Edit</a> 
            <a class="btn btn-primary" href="{{url('deletemember/'.$item->id)}}">Delete</a>
        </td>
    </tr>
@endforeach
</table>
@endsection

@section('script')

@endsection
