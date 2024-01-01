<?php

namespace App\Repositories;

use App\Interfaces\ShopRepositoryInterface;
use App\Models\Product;

class ShopRepository implements ShopRepositoryInterface
{
	public function getAllProducts()
    {
      $products =  Product::select(['id','name','slug','description','image'])
      ->with(['stocks' => fn($query) => $query->select(['id','product_id','sku','images'])
      ])
      ->where('is_active',1)
      ->get();
      
      return $products;
    }
}
