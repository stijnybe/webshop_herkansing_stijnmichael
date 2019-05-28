@extends('layouts.master')

@section('content')

    <div class="mymodal">
        <form method="POST" action="{{ url('/management/products/create') }}" enctype="multipart/form-data">
          <h1>New Product</h1>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    @foreach($baseCategories as $category)
                        <option value="{{  $category->category }}">{{  $category->category }}</option>
                    @endforeach
                </select>
                <br />
                <label for="subcategory">Subcategory:</label>
                <select class="form-control" name="subcategory" id="subcategory">
                    @foreach($baseSubcategories as $category)
                        <option value="{{  $category->subcategory }}">{{  $category->subcategory }}</option>
                    @endforeach
                </select>
                <br />
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
                <label>Upload Image</label>
                <div class="input-group">
                                     <span class="input-group-btn">
                                         <span class="btn btn-default btn-file">
                                             Zoeken… <input type="file" id="imgInp" name="imagefile">
                                         </span>
                                     </span>
                </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
      </div>
        @endsection
