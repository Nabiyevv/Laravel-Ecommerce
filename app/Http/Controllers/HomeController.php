<?php

namespace App\Http\Controllers;

use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private HomeRepositoryInterface $homeRepository;

    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;   
    }

    public function index()
    {
        $featuredProducts = $this->homeRepository->getFeaturedProducts();
        return view('frontend.home',compact('featuredProducts'));
    }

}
