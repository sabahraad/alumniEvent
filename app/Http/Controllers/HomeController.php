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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        // dd('ok');
        return view('test');
    }
    public function adminDashBoard()
    {
        // dd('ok');
        return view('admin.dashBoard');
    }
    public function registration()
    {
        // dd('ok');
        return view('admin.registration');
    }
}
