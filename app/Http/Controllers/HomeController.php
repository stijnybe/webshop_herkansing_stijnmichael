<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Order;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    //

    public function index(){
        $products = Product::All();
        $categories = Category::All();
        $orders = Order::All();
        return view('management.home', compact('products'), [ 'categories' => $categories, 'orders' => $orders ]);
    }

    public function setHighlights(){
        $datenow = Carbon::now();

        $product = Product::where('firsthighlight', 1)->first();
        $product->firsthighlight = 0;
        $product->save();

        $product = Product::where('secondhighlight', 1)->first();
        $product->secondhighlight = 0;
        $product->save();

        $product = Product::where('thirdhighlight', 1)->first();
        $product->thirdhighlight = 0;
        $product->save();

        $highlightOne = Input::get('highlight1');
        $highlightTwo = Input::get('highlight2');
        $highlightThree = Input::get('highlight3');


        $product = Product::where('id', $highlightOne)->first();
        $product->firsthighlight = 1;
        $product->updated_at = $datenow;
        $product->save();

        $product = Product::where('id', $highlightTwo)->first();
        $product->secondhighlight = 1;
        $product->updated_at = $datenow;
        $product->save();

        $product = Product::where('id', $highlightThree)->first();
        $product->thirdhighlight = 1;
        $product->updated_at = $datenow;
        $product->save();



//        $product->name = request('name');
//        $product->category = request('category');
//        $product->price = request('price');
//        $product->updated_at = $datenow;
//
        $product->save();
        return redirect('/management/home');
    }
}
