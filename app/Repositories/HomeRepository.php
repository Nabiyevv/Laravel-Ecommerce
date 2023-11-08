<?php

namespace App\Repositories;

use App\Interfaces\HomeRepositoryInterface;
use App\Models\Product;

class HomeRepository implements HomeRepositoryInterface
{

    public function getProducts()
    {
        return Product::select(['id', 'name', 'slug', 'price', 'description', 'image'])->with(['stocks' => fn ($query) => $query->select(['id', 'product_id', 'sku', 'image'])->where('is_active', true)])->get();
    }

    public function getFeaturedProducts()
    {
        return Product::where('is_featured', true)->select(['id','name','slug','image'])->get();
    }

}
