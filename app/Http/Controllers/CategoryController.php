<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $categories = Cache::remember('categories',30*30,fn() => Category::select(['id','name'])->withCount('products')->get());
        return $categories;
    }

}
