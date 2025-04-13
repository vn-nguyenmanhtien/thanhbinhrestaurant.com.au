<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class BaseController extends Controller
{
    public function index()
    {

        try {
            return response()->json([
                'status'=> 'Success', 
                'message' => $message, 
                'data' => $data
            ], $code);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>'Error',
                'message' => $message,
                'data' => null
            ], $code);
        }

        $categorires = Category::all();//->where('');


        
        return view('home_page', compact('products'));
    }
}