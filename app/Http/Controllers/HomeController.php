<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['halamandepan', 'about', 'blog', 'contact','layanan','faq']);
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
        $blogs = Blog::latest()->get();
        return view('HalamanDepan.Blog', compact('blogs'));
    }

    public function layanan($jenis)
{
    $viewMap = [
        'virtual-office' => 'HalamanDepan.VirtualOffice',
        'ruang-kantor'   => 'HalamanDepan.RuangKantor',
        'ruang-meeting'  => 'HalamanDepan.RuangMeeting',
        'pendirian-pt'   => 'HalamanDepan.PendirianPT',
        'pendirian-cv'   => 'HalamanDepan.PendirianCV',
        'coworking-space'      => 'HalamanDepan.Coworking',
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
        $faqs = Faq::all();
        return view('HalamanDepan.faq', compact('faqs'));
    }


    public function halamandepan()
    {
       
       $activeBanner = Banner::where('is_active', true)->first() ?? Banner::latest()->first();

      
       $allBanners = Banner::latest()->get();

       return view('welcome', compact('activeBanner', 'allBanners'));
    }


    public function detail(Blog $blog)
{

    return view('HalamanDepan.detail', compact('blog'));  // Pass the blog to the view
}

}
