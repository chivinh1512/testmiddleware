<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('home');
    }

    public function getphimkiemhiep(){
        return view('phimkiemhiep');
    }
    public function getphimthieunhi(){
        return view('phimthieunhi');
    }
    public function getphimtinhcam(){
        return view('phimtinhcam');
    }

    public function getphim16(){
        return view('phim16+');
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
}
