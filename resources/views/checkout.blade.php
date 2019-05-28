@extends('layouts.master')

@section('content')

      <div class="mymodal">



        <form method="POST" actions="/checkout">
            <h1>Cart</h1>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>

            <div class="form-group">
                <label for="adres">Adres:</label>
                <input type="text" class="form-control" id="adres" name="adres">
                <label for="plaats">Plaats:</label>
                <input type="text" class="form-control" id="plaats" name="plaats">
                <label for="postcode">Postcode:</label>
                <input type="text" class="form-control" id="postcode" name="postcode">
            </div>

            <div class="form-group">
                <label for="emailadres">Email:</label>
                <input type="text" class="form-control" id="emailadres" name="emailadres">
            </div>

            <div>
                <label for="totaalprijs">Totaal prijs: €{{ $totalPrice }} </label>
            </div>
            <button type="submit" class="btn btn-primary">Naar betaling</button>


        </form>
      </div>
@endsection
