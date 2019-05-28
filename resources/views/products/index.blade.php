@extends('layouts.master')

@section('content')

          <div class="products">
            @foreach($products as $product)
              @if($product->archived == false)
            <div class="productholder">
              <a href="/products/{{ $product->id }}">
                <div class="product">
                  <img class="productimage" src="/images/uploads/{{ $product->imgurl }}">
                  </img>
                  <div class="infoholder">
                    {{ $product->name }}
                    <br>
                    {{ $product->price }}
                  </div>
                </div>
              </a>
              <a href="/add-to-cart/{{ $product->id }}">
                <div class="orderbutton">
                  Bestellen
                </div>
              </a>
            </div>
              @endif
            @endforeach
          </div>
  @endsection
