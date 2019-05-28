<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class ProductController extends BaseController
{
    //

    public function index(){
        $products = Product::All();
        $this->breadcrumbs->addCrumb('Products', 'products');
        return view('products.index', compact('products'));

    }

    public function show(Product $product){

        $this->breadcrumbs->addCrumb('Products', 'products')
            ->addCrumb('Categories', 'categories')
            ->addCrumb($product->category, $product->category)
            ->addCrumb($product->subcategory, $product->subcategory)
            ->addCrumb($product->name, 'products');
        return view('products.show', compact('product'));
    }

    public function getByCategory($category){
        $products = DB::table('products')
            ->where('category', $category)
            ->get();
//        dd($products);
//        $products = Product::All();
        $this->breadcrumbs->addCrumb('Products', 'products')->addCrumb('Categories', 'categories')->addCrumb('Category', $category);
        return view('products.index', compact('products'));
    }

    public function getBySubcategory($category, $subcategory){
        $products = DB::table('products')
            ->where('subcategory', $subcategory)
            ->get();
//        dd($subcategory);
//        $products = Product::All();
        $this->breadcrumbs->addCrumb('Products', 'products')->addCrumb('Categories', 'categories')->addCrumb($category, $category)->addCrumb($subcategory, $subcategory);
        return view('products.index', compact('products'));
    }

    public function create(){

        $categories = Category::All();
//        return view('management.products.create');
        return View::make('management.products.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request){

        $datenow = Carbon::now();


        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->subcategory = $request->subcategory;
        $product->price = $request->price;
        $product->firsthighlight = false;
        $product->secondhighlight = false;
        $product->thirdhighlight = false;
        $product->created_at = $datenow;
        $product->updated_at = $datenow;


        $this->validate($request, [
            'imagefile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file_name = $this->uploadImage($request->imagefile);

        $product->imgurl = $file_name;

        $product->save();

        return redirect('/management/home')->with('success', 'U heeft een product toegevoegd!');


    }

    public function edit(Product $product){
        $categories = Category::All();

        return view('management.products.edit', compact('product'), [ 'categories' => $categories ]);
    }

    public function patch(Product $product, Request $request){

        $datenow = Carbon::now();

        $product->name = request('name');
        $product->category = request('category');
        $product->subcategory = request('subcategory');
        $product->price = request('price');
        $product->archived = request('archived');
        if( request('imagefile') != null){
            $this->validate($request, [
                'imagefile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $file_name = $this->uploadImage($request->imagefile);

            $product->imgurl = $file_name;
        }
        $product->updated_at = $datenow;

        $product->save();

        return redirect('/management/home');
    }



    function uploadImage($image){
        $file_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images').'/uploads/', $file_name);
        return $file_name;
    }

    public function addtocart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect('/products');
    }

    public function reduceQuantityOfProductInCart($id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceQuantityOfProduct($product->id);

        Session::put('cart', $cart);
        return redirect('/shoppingcart');
    }

    public function removeFromCart($id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeProductFromCart($product->id);

        Session::put('cart', $cart);
        return redirect('/shoppingcart');
    }

    public function getcart(){
        if(!Session::has('cart')){
            return view('/cart', ['totalPrice' => 0]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('/cart', [ 'products' => $cart->products, 'totalPrice' => $cart->totalPrice ]);
    }


}