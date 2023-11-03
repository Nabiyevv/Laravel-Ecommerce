<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
      //  Product::select(['id','name','slug','price','description','image'])->with(['stocks' => fn($query) => $query->select(['id','product_id','sku','image'])->where('is_active',true)])->get();
      
      $products = Product::all();
      return View('frontend.shop',compact('products'));
    }

}
