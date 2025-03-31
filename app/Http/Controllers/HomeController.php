<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About; 
use App\Models\Category;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
class HomeController extends Controller
{
    public function index(){

        $about = About::first();
        $categories = Category::where('status',1)->get();
        $company = Company::first();
        $faqs = Faq::all();
        $heroes = Hero::all();
        $products = Product::all();
        $services = Service::all();
        $teams = Team::all();
        return view('home', compact('about','categories', 'company','faqs','heroes','products','services','teams'));
    }
}
