@extends('layouts.master')

@section('content')
    <div class="mymodal">
        <form method="POST">
            <h1>Products</h1>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">

            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">

            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">

            </div>

            <br />
            <button type="submit" class="btn btn-primary">Create account</button>
        </form>
      </div>
  @endsection
