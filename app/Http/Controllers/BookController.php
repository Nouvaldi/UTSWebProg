<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $book_data = Book::all();
        $category_data = Category::all();

        return view('home', compact('book_data'), compact('category_data'));
    }

    public function idxbook($title){
        $book_data = Book::all()->where('title', $title);
        $category_data = Category::all();

        return view('book', compact('book_data'), compact('category_data'));
    }
}
