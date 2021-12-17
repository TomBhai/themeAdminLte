<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{

    /**
     * Show the application home.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application contact.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}
