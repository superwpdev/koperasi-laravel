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
            <form action="/insertproduct" method="post" enctype="multipart/form-data">
              @csrf
              
            <div class="form-floating mb-3">
                <label for="category">Category</label>
                <select class="form-control" aria-label="Default select example" name="id_category">
                  <option selected>Pilih Category</option>
                  @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->category}}</option>
                    
                  @endforeach
                </select>
                
                
              </div>
              <div class="form-floating mb-3">
                <label for="product">Product</label>
                <input type="text" class="form-control"  name="product">
              </div>
              <div class="form-floating mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control"  name="description">
                
              </div>
              <div class="form-floating mb-3">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="foto">
              </div>
              <div class="form-floating mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control"  name="price">
                
              </div>
              <div class="form-floating mb-3">
                <label for="stock">Stock</label>
                <input type="text" class="form-control"  name="stock">
                
              </div>
              <div class="form-floating mb-3">
                <label for="status">Status</label>
                <select class="form-control" aria-label="Default select example" name="status">
                  <option selected>Status</option>
                  <option value="Ready">Ready</option>
                  <option value="Empty">Empty</option>
                </select>
                
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