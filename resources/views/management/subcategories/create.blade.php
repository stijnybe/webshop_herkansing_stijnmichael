@extends('layouts.master')

@section('content')

<div class="mymodal">
  <form method="POST" action="{{ url('/management/subcategories/create') }}">
  <h1>New Subcategory</h1>
      {{ csrf_field() }}

      <div class="form-group">
          <label for="name">Category:</label>
          <select class="form-control" name="category" id="category">
              @foreach($baseCategories as $category)
                  <option value="{{  $category->category }}">{{  $category->category }}</option>
              @endforeach
          </select>
      </div>
      <div class="form-group">
          <label for="name">Subcategory:</label>
          <input type="text" class="form-control" id="subcategory" name="subcategory">
      </div>


      <button type="submit" class="btn btn-primary">Create Subcategory</button>
  </form>
</div>
  @endsection
