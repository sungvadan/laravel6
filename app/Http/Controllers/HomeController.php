<?php

namespace App\Http\Controllers;

use App\Example;
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
//        $this->middleware('auth');
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
//        ddd(auth()->user()->id);
//        Request::input('name');
//        ddd(resolve(Example::class), resolve(Example::class));

        return view('test');
    }
}
