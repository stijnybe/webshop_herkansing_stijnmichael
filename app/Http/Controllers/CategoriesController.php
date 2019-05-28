<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\View;

class CategoriesController extends BaseController
{
    public function create(){
        return View::make('management.categories.create', []);
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

    public function edit(Category $category){

        return view('management.categories.edit', compact('category'));
    }

    public function patch(Category $category){

        $datenow = Carbon::now();

        $category->category = request('category');
        $category->subcategory = request('subcategory');
       
        $category->updated_at = $datenow;

        $category->save();

        return redirect('/management/home');
    }
}
