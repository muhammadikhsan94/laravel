<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use SSO\SSO;
use Auth;

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
        $users = SSO::getUser();

        return view('home', compact('users'));
    }
}
