<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use TCG\Voyager\Models\Category;

class CategoryController extends Controller
{
    use ApiResponser;

    public function index()
    {
        try {
            $categorires = Category::orderBy('order')->get();//->where('');
            
            if ($categorires) {
                $firstCategoryId = $categorires->first()->id;
                $products = Product::where('category_id', $categorires->first()->id)->orderBy("sort_number")->paginate(Product::ITEM_OF_PAGE);
            }

            $result = [
                'first_of_category_id' => $firstCategoryId,
                'categories' => $categorires ?? [],
                'products' => $products ?? [],
            ];
            
            return $this->successResponse($result, 'List of category');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return $this->errorResponse('Server Error', 500);
        }



        
        return view('home_page', compact('products'));
    }
}