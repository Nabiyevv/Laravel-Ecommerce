<?php

namespace App\Interfaces;


interface ProductRepositoryInterface
{

  public function productDetail($slug);
  
  public function getFeaturedProducts();

}

