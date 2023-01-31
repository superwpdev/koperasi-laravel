@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            
            <h5 class="card-title">Product</h5>
           
            <a href="/addproduct" class="btn btn-primary" type="button" >Add</a>

          </div>
          <div class="card-body ">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                @php
                  $no=1;
                @endphp
                @foreach ($res_product as $item)
                        
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->product }}</td>
                    <td>{{$item->description}}</td>
                    <td>
                      <img src="{{ asset('imageproduct/'.$item->image) }}" alt="" style="width:80px;">
                    </td>
                    <td>RP. {{number_format($item->price)}}</td>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->status}}</td>
                    
                    <td>
                      <a class="btn btn-primary" href="{{url('editproduct/'.$item->id)}}">Edit</a>
                      <a class="btn btn-danger" href="{{url('deleteproduct/'.$item->id)}}">Delete</button>
                    </td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
            </table>
          </div>
          <div class="card-footer">
            <hr>
            
         
      </div>
    </div>
  @endsection