@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            
            <h5 class="card-title">Users</h5>
           
           

          </div>
          <div class="card-body ">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    
                  </tr>
                </thead>
                <tbody>
                @php
                  $no=1;
                @endphp
                @foreach ($res_users as $item)
                
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a class="btn btn-danger" href="{{url('deleteusers/'.$item->id)}}">Delete</button>
                    </td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
          </div>
          <div class="card-footer ">
            <hr>
            
         
      </div>
    </div>
    
        
          
      
  
  @endsection