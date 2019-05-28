<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {

        $this->breadcrumbs = new \Creitive\Breadcrumbs\Breadcrumbs;
        $this->breadcrumbs->addCrumb('Home', '/');

        $baseSubcategories = Category::All();
        $storedCategories = [];
        $baseCategories = [];
        foreach($baseSubcategories as $category){
            if (!in_array($category->category, $storedCategories)){
                array_push($baseCategories, $category);
                array_push($storedCategories, $category->category);
            }
        }

        View::share('baseCategories', $baseCategories);
        View::share('baseSubcategories', $baseSubcategories);
        View::share('breadcrumbs', $this->breadcrumbs);
    }
}
