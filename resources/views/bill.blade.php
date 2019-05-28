@extends('layouts.master')

@section('content')
<div class="mymodal">
  <div class="mysubmodal">
    <h1>Thank you for ordering with le winkel du superfancy, {{ $order->firstname }} {{ $order->lastname }}! here is your facture</h1>

    <br />

    @foreach($orderproducts as $orderproduct)
        <p>
            Quantity: {{ $orderproduct->quantity }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            @foreach($products as $product)
                @if($orderproduct->productid == $product->id)
                     {{ $product->name }}
                @endif
            @endforeach
        </p>
        <br />
    @endforeach


    <br />
    <br />
    <br />
    <a href="/"><button>Confirm and return to home</button></a>
  </div>
</div>
      @endsection
