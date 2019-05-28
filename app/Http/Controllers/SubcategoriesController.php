<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SubcategoriesController extends BaseController
{

    public function create(){
        return View::make('management.subcategories.create', []);
    }

    public function store(Request $request){

        $datenow = Carbon::now();


        $category = new Category();
        $category->category = $request->category;
        $category->subcategory = $request->subcategory;
        $category->created_at = $datenow;
        $category->updated_at = $datenow;

        $category->save();

        return redirect('/management/home')->with('success', 'U heeft een categorie toegevoegd!');

    }
}
