<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Interfaces\HomeRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;   
    }
    
    public function productDetail(Request $request, $slug)
    {
        $product = $this->productRepository->productDetail($slug);

        $featuredProducts = $this->productRepository->getFeaturedProducts();

        $stock = $product->stocks;

        $images = [];

        $sizes = [];

        foreach($stock as $value){
            $images[] = $value->image;
            $sizes[] = $value->productSize->name;//enum
        }

        // dd($stock[0]->sku);
        return view('frontend.product-detail')
            ->with(['featuredProducts' => $featuredProducts, 'product' => $product, 'images' => $images, 'sizes' => $sizes]);
    }

}
