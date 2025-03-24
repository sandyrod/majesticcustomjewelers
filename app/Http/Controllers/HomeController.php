<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
class HomeController extends Controller
{
    public function index(){

        $categories = Category::where('status',1)->get();
        $company = Company::first();
        $faqs = Faq::all();
        $products = Product::all();
        $services = Service::all();
        $teams = Team::all();
        return view('home', compact('categories', 'company','faqs','products','services','teams'));
    }
}
