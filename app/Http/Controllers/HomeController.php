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

    public function layanan($jenis)
{
    $viewMap = [
        'virtual-office' => 'HalamanDepan.VirtualOffice',
        'ruang-kantor'   => 'HalamanDepan.RuangKantor',
        'ruang-meeting'  => 'HalamanDepan.RuangMeeting',
        'pendirian-pt'   => 'HalamanDepan.PendirianPT',
        'pendirian-cv'   => 'HalamanDepan.PendirianCV',
    ];

    if (!array_key_exists($jenis, $viewMap)) {
        abort(404);
    }

    return view($viewMap[$jenis]);
}

    public function contact()
    {
        return view('HalamanDepan.contact');
    }

    public function faq()
    {
        return view('HalamanDepan.faq');
    }


    public function halamandepan()
    {
       
       $activeBanner = Banner::where('is_active', true)->first() ?? Banner::latest()->first();

      
       $allBanners = Banner::latest()->get();

       return view('welcome', compact('activeBanner', 'allBanners'));
    }
}
