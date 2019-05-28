@extends('layouts.master')

  @section('content')
    <div class="mymodal">
      <div class="mysubmodal">
        <h1>Cart</h1>

        @if(Session::has('cart'))
        <ul>
            @foreach($products as $product)
                <li>
                    <h4>{{ $product['quantity']}} {{ $product['item']['name'] }} </h4>
                    <h4>
                        €{{ $product['price'] }}  <a href="/reduce-quantity-of-product/{{ $product['item']['id'] }}"> Reduce Quantity by 1</a>
                        <a href="/remove-from-cart/{{ $product['item']['id'] }}"> Remove from cart</a>
                    </h4>

                </li>
            @endforeach
        </ul>
        @endif
        <h3> Totalprice = € {{ $totalPrice }}</h3>
        <a href="/checkout"><button>Checkout</button></a>

      </div>
    </div>
  @endsection
