@extends('layouts.master')

@section('content')

      <div class="mymodal">

        <form method="POST" actions="/editproduct" enctype="multipart/form-data">
            <h1>Edit Product</h1>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option value="{{ $product->category }}">{{ $product->category }}</option>
                    @foreach($baseCategories as $category)
                        <option value="{{  $category->category }}">{{  $category->category }}</option>
                    @endforeach
                </select>
                <br />
                <label for="subcategory">Subcategory:</label>
                <select class="form-control" name="subcategory" id="subcategory">
                    <option value="{{ $product->subcategory }}">{{ $product->subcategory }}</option>
                    @foreach($baseSubcategories as $category)
                        <option value="{{  $category->subcategory }}">{{  $category->subcategory }}</option>
                    @endforeach
                </select>
                <br />
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">


            <label for="archived"> Archived </label>

                <input type="radio" id="true" name="archived" value="1"
                       >
                <label for="true">true</label>
                <input type="radio" id="false" name="archived" value="0" checked>
                <label for="false">false</label>
            </div>
            <label>Upload Image</label>
            <div class="input-group">
                                     <span class="input-group-btn">
                                         <span class="btn btn-default btn-file">
                                             Zoeken… <input type="file" id="imgInp" name="imagefile">
                                         </span>
                                     </span>
            </div>
            <button type="submit" class="btn btn-primary">Edit Product</button>
        </form>

      </div>
  @endsection
