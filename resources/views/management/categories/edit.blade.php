@extends('layouts.master')

@section('content')

<div class="mymodal">

  <form method="POST" actions="/editproduct" enctype="multipart/form-data">
    <h1>Edit category</h1>
      {{ csrf_field() }}

      <div class="form-group">
          <label for="name">Category:</label>
          <input type="text" class="form-control" id="category" name="category" value="{{ $category->category }}">
      </div>
      <div class="form-group">
          <label for="name">Subcategory:</label>
          <input type="text" class="form-control" id="subcategory" name="subcategory" value="{{ $category->subcategory }}">
      </div>

      <button type="submit" class="btn btn-primary">Edit category</button>
  </form>

</div>

@endsection
