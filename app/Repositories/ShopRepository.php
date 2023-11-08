<?php

namespace App\Repositories;

use App\Interfaces\ShopRepositoryInterface;
use App\Models\Product;

class ShopRepository implements ShopRepositoryInterface
{
	public function getAllProducts()
    {
      //  Product::select(['id','name','slug','price','description','image'])->with(['stocks' => fn($query) => $query->select(['id','product_id','sku','image'])->where('is_active',true)])->get();
      
      return Product::all();
    }
}
