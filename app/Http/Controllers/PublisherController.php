<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publisher_data = Publisher::paginate(1);
        $category_data = Category::all();

        // return var_dump($publisher_data);
        return view('publisher', compact('publisher_data'), compact('category_data'));
    }
}
