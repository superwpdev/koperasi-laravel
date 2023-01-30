@extends('template')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <h5 class="card-title">Add Product</h5>
          
          </div>
          <div class="card-body ">
            <form action="{{url('updateproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf

                @php
                    // dump($findproduct)
                @endphp
              <input type="hidden" class="form-control" id="id" name="id" value="{{ $findproduct->id }}" >
            <div class="form-floating mb-3">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="id_category" value="{{ $findproduct->id_category }}" >
                
              </div>
              <div class="form-floating mb-3">
                <label for="product">Product</label>
                <input type="text" class="form-control" id="product" name="product" value="{{ $findproduct->product }}" >
                
              </div>
              <div class="form-floating mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $findproduct->description }}">
                
              </div>
              <div class="form-floating mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="foto" name="foto" value="{{ $findproduct->image }}">
              </div>
              <div class="form-floating mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $findproduct->price }}">
                
              </div>
              <div class="form-floating mb-3">
                <label for="stock">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{ $findproduct->stock }}" >
                
              </div>
              <div class="form-floating mb-3">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $findproduct->status }}">
                
              </div>
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