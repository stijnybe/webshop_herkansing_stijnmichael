@extends('layouts.master')

@section('content')

<div class="mymodal">

  <form method="POST" action="{{ url('/management/categories/create') }}">
    <h1>New Category</h1>
      {{ csrf_field() }}

      <div class="form-group">
          <label for="name">Category:</label>
          <input type="text" class="form-control" id="category" name="category">
      </div>
      <div class="form-group">
          <label for="name">Subcategory:</label>
          <input type="text" class="form-control" id="subcategory" name="subcategory">
      </div>

      <button type="submit" class="btn btn-primary">Create Category</button>
  </form>

</div>

  @endsection
