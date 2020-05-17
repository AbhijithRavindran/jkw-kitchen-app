@extends('layouts.admin_layout')
@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Food Menu</h4>
        <p class="card-description"> Add new food item here</p>
      <form class="forms-sample" action="/admin/food_menu/update/{{$food_menu_item->id}}" method="POST"  enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" required name="name" value={{$food_menu_item->name}} class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <label>Update an Image</label><br>
          <img id="output" src="{{$food_menu_item->image_url}}" width="100px" height="100px"/><br>
          <input type="file" accept="image/*" onchange="loadFile(event)" name="image" required>
          <br>
          <br>
          {{-- <div class="form-group">
            <label>Upload an Image</label><br>
                <input type="file" value={{$food_menu_item->name}} required name="image" id="myFile">
          </div> --}}
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend bg-primary border-primary">
                <span class="input-group-text bg-transparent text-white">Price $</span>
              </div>
              <input type="number" required name="price"  value={{$food_menu_item->price}} step="0.01" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>
          </div>
          {{-- <div class="form-group">
            <div class="form-radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="active" checked=""> Active <i class="input-helper"></i></label>
            </div>
            <div class="form-radio">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="deactive"> Deactive <i class="input-helper"></i></label>
            </div>
          </div> --}}
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control"  required  name="description" id="exampleTextarea1" rows="2">{{$food_menu_item->description}}</textarea>
          </div>
          <button type="submit" class="btn btn-warning mr-2">Update</button>
          <a href="/admin/food_menu/list/all" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  <script>
    var loadFile = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
@endsection