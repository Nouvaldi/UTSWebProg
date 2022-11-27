<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($name){
        $category_data = Category::all();
        $idxcategory = Category::all()->where('name', $name);

        // return var_dump($category_data);
        return view('category', compact('category_data'), compact('idxcategory'));
    }

}
