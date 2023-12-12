<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Interfaces\HomeRepositoryInterface;

class ProductController extends Controller
{
    //
    private HomeRepositoryInterface $homeRepository;

    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;   
    }
    
    public function productDetail(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $featuredProducts = $this->homeRepository->getFeaturedProducts();
        return view('frontend.product-detail')->with(['featuredProducts' => $featuredProducts, 'product' => $product]);
    }

}
