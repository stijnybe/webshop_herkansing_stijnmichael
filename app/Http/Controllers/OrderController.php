<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\Order;
use App\OrderProduct;

class OrderController extends BaseController
{
    //
    public function getcheckout()
    {
        if (!Session::has('cart')) {
            return view('/cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $totalPrice = $cart->totalPrice;
        return view('/checkout', ['totalPrice' => $totalPrice]);
    }

    public function store(Request $request)
    {
        $datenow = Carbon::now();

        //Make order with id
        //Get OrderID
        //Add Products with orderID
        Order::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'adres' => request('adres'),
            'plaats' => request('plaats'),
            'postcode' => request('postcode'),
            'emailadres' => request('emailadres'),
            'created_at' => $datenow,
            'updated_at' => $datenow
        ]);

        $adres = $request->adres;
        $plaats = $request->plaats;
        $postcode = $request->postcode;

        $order = DB::table('orders')->where([
            ['adres', $adres ],
            ['plaats',  $plaats],
            ['postcode', $postcode]
            ])->orderby('created_at', 'desc')->first();

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = $cart->products;

        foreach ($products as $product) {
            $productid = $product['item']['id'];
            $productquantity = $products[$productid]['quantity'];
            OrderProduct::create([
                'orderid' => $order->id,
                'productid' => $productid,
                'quantity' => $productquantity,
                'created_at' => $datenow,
                'updated_at' => $datenow
            ]);
        }
        $orderid = $order->id;
        $request->session()->forget('cart');
//        $this->getbill($orderid);
        return redirect()->route('bill', ['orderid' => $orderid]);
        //        return redirect('/billing', $order->id);
    }

    public function getbill($orderid){

//        $order = DB::table('orders')->where(['orderid', '=', $orderid])->get();
        $order = DB::table('orders')->find($orderid);
//        $products = DB::table('order_products')->where(['orderid', $orderid])->first();
        $orderproducts = DB::table('order_products')->where('orderid', $orderid)->get();
        $products = [];
        foreach($orderproducts as $product){
            $productToAdd = DB::table('products')->find($product->productid);
            array_push($products, $productToAdd);
        }

        return view('bill', compact('order', 'orderproducts', 'products'));
    }

    public function delete($orderid){
        $order = Order::find($orderid);
        $order->delete();
        return redirect()->route('home');
    }
}
