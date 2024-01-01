<?php

namespace App\Repositories;

use App\Interfaces\HomeRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function productDetail($slug)
    {
        return Product::query()->where('slug', $slug)
        ->with(['stocks' => function ($query) {
            $query->where('quantity', '>', 0);
        }])
        ->firstOrFail();
    }
    
    public function getFeaturedProducts()
    {
        return Product::where('is_featured', true)  
            ->select(['id','name','slug','image'])
            ->get();
    }
}
