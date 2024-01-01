<?php

namespace App\Http\Controllers;

use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function subscribe(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email'
        ]);

        Mail::to($request->email)->send(new \App\Mail\Subscribe());

        return back();

    }
}
