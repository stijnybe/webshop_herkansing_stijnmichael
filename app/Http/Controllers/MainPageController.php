<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends BaseController
{
    //
    public function index(Request $request){
        $highlight1 = DB::table('products') -> where ('firsthighlight', 1) ->get();
        $highlight2 = DB::table('products') -> where ('secondhighlight', 1) ->get();
        $highlight3 = DB::table('products') -> where ('thirdhighlight', 1) ->get();
//        $products = Product::all()->where('name', 'like', $request->search)->get();
        return view('home', compact('highlight1', 'highlight2', 'highlight3'));
    }

    public function about(){
        $this->breadcrumbs->addCrumb('About', 'about');
        return view('about');
    }
}
