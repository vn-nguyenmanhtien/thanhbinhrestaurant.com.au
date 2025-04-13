<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        $products = Product::with('category')->get();

        
        return view('home_page', compact('products'));
    }
}