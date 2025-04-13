<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use TCG\Voyager\Models\Category;

class ProductController extends Controller
{
    use ApiResponser;

    public function getProductOfCategory(int $categoryId): JsonResponse
    {
        try {
            $products = Product::where([
                ['category_id', '=', $categoryId],
                ['is_show', Product::IS_SHOW['TRUE']]
            ])->orderBy("sort_number")->paginate(Product::ITEM_OF_PAGE);//->where('');
            
            return $this->successResponse($products, 'List product of category');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return $this->errorResponse('Server Error', 500);
        }



        
        return view('home_page', compact('products'));
    }
}