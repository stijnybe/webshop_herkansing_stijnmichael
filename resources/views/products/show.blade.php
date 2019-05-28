@extends('layouts.master')

@section('content')
<div class="mymodal">
  <div class="mysubmodal">
        <h1>{{ $product->name }}</h1>
        <img class="showproductimage" src="/images/uploads/{{ $product->imgurl }}">
        <h3>Beschrijving</h3>
        <br>
        <p>{{ $product->description }}</p>
        <h2>{{ $product->price }} euro</h2>

      @if( $product->archived == false)
        <a href="/add-to-cart/{{ $product->id }}">
          <button>
            Bestellen
          </button>
        </a>
          @else
                <h3>Product is niet langer beschikbaar </h3>
          @endif
  </div>
</div>
@endsection
