<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        
        return  Category::select(['id','name'])->withCount('products')->get();

        return DB::table('categories')
        ->leftJoin('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.id', 'categories.name', DB::raw('COUNT(products.id) as product_count'))
        ->groupBy('categories.id', 'categories.name')
        ->get();
    }
}
 