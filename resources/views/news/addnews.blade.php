@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Add News</h5>
          
          </div>
          <div class="card-body ">
            <form action="/insertnews" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-floating mb-3">
                <label for="id_category">Category</label>
                <input type="text" class="form-control" id="id_category" name="id_category">
                
              </div>
              <div class="form-floating mb-3">
                <label for="tittle">tittle</label>
                <input type="text" class="form-control" id="tittle" name="tittle" >
              </div>
              <div class="form-floating mb-3">
                <label for="description">content</label>
                <input type="content" class="form-control" id="content" name="content">
              <button class="btn btn-primary" type="submit">Submit</button>
            </form>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class=""></i> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        
          
      </div>
      <div class="col-md-8">
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection