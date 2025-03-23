<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){

        $categories = Category::where('status',1)->get();

        return view('home', compact('categories'));
    }
}
