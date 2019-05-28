@extends('layouts.master')

@section('content')
<div class="mymodal">

        <form method="POST" actions="/highlightproduct">

                  <h1>Highlights</h1>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="highlight1">Highlighted product 1:</label>
                <select name="highlight1">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="highlight2">Highlighted product 2:</label>
                <select name="highlight2">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="highlight3">Highlighted product 2:</label>
                <select name="highlight3">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <br />

            <button type="submit" class="btn btn-primary">Set highlights</button>
        </form>
        <div class="mysubmodal">

          <br />

          <h1>Categories</h1>
          <h3><a href="/management/categories/create">Create Category</a></h3>
          <ul>

              @foreach($baseCategories as $category)
                  <li><a href="/management/categories/{{ $category->id }}">{{ $category->category }}</a></li>
              @endforeach

          </ul>

          <br />

          <h1>Products</h1>
          <h3><a href="/management/products/create">Create Product</a></h3>
          <ul>

              @foreach($products as $product)
                  <li><a href="/management/products/{{ $product->id }}">{{ $product->name }}</a></li>
              @endforeach

          </ul>

          <h3>Orders</h3>
          <ul>

              @foreach($orders as $order)
                  <li><a href="/billing/{{ $order->id }}">{{ $order->id }}</a>  <a href="/management/order/{{ $order->id }}"><button>Delete</button></a></li>
              @endforeach

          </ul>

          <br />
        </div>
      </div>
        @endsection
