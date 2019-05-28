<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends BaseController
{
    //
    public function search(Request $request){
//        $products = Product::all()->where('name', 'like', $request->search)->get();
        $products = DB::table('products')
            ->where('name', 'like', '%'.$request->search.'%')
            ->get();
        return view('products.index', compact('products'));
    }
}
