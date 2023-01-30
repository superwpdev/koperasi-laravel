@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">News</h5>
           
            <a href="/addnews" class="btn btn-primary" type="button" >Add</a>
          </div>
          <div class="card-body ">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Content</th>
                    <th scope="col">Dibuat</th>
                  </tr>
                </thead>
                <tbody>
                @php
                  $no=1;
                @endphp
                @foreach ($res_news as $item)
                        
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{ $item->tittle }}</td>
                    <td>{{$item->content}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{url('tampilnews/'.$item->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('deletenews/'.$item->id)}}">Delete</button>
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