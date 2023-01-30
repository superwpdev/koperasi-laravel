@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Add Category</h5>
          
          </div>
          <div class="card-body ">
            <form action="/insertproductcategory" method="post" >
                @csrf
            <div class="form-floating mb-3">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category">
                
              
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