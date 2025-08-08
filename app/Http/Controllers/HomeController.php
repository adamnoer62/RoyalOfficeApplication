<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['halamandepan', 'about', 'blog', 'contact']);
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('HalamanDepan.About');
    }

    public function blog()
    {
        return view('HalamanDepan.Blog');
    }

    public function contact()
    {
        return view('HalamanDepan.contact');
    }


    public function halamandepan()
    {
       
       $activeBanner = Banner::where('is_active', true)->first() ?? Banner::latest()->first();

      
       $allBanners = Banner::latest()->get();

       return view('welcome', compact('activeBanner', 'allBanners'));
    }
}
