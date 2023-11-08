<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Interfaces\ShopRepositoryInterface;
use App\Models\Product;

class ShopController extends Controller
{
    /**
     * Handle the incoming request.
     */
    private ShopRepositoryInterface $shopRepository;

    public function __construct(ShopRepositoryInterface $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function index()
    {
      $products = $this->shopRepository->getAllProducts();
      return View('frontend.shop',compact('products'));
    }

}
