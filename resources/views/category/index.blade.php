@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Category</h5>
           
            <a href="/addproductcategory" class="btn btn-primary" type="button" >Add</a>
          </div>
          <div class="card-body ">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dibuat</th>
                  </tr>
                </thead>
                <tbody>
                @php
                  $no=1;
                @endphp
                @foreach ($res_productcategory as $item)
                        
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $item->category }}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('tampilproductcategory/'.$item->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('deleteproductcategory/'.$item->id)}}">Delete</button>
                      </td>
                  </tr>
                  
                  
                  @endforeach
                </tbody>
              </table>
            </table>
          </div>
          <div class="card-footer ">
            <hr>
            
         
      </div>
    </div>
  @endsection