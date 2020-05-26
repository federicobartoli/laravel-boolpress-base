<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
           $users = Auth::user()->get(); //prendo l'utente ricordarsi IL GET
           // dd($users);
           return view('home' ,compact('users') );

    }

    // public function getUser()
    // {
    //    $user = User::all;
    //    dd($user);
    //    return view('home' ,compact('$user') );
    // }
}
