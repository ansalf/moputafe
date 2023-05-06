<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }

    public function service()
    {
        return view('user.service');
    }

    public function project()
    {
        return view('user.project');
    }

    public function feature()
    {
        return view('user.feature');
    }

    public function team()
    {
        return view('user.team');
    }

    public function testimonial()
    {
        return view('user.testimonial');
    }

    public function contact()
    {
        return view('user.contact');
    }
    public function quote()
    {
        return view('user.quote');
    }
    public function errors()
    {
        return view('errors.404');
    }



}
