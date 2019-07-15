<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function subdomain()
    {
        return view('subdomain');
    }

    public function agenda()
    {
        return view('agenda');
    }
 
    public function berita()
    {
        return view('berita');
    }
    
    public function profil()
    {
        return view('profil');
    }

    public function download()
    {
        return view('download');
    }
    
    public function kontak()
    {
        return view('kontak');
    }
    
    public function external()
    {
        return view('external');
    }
    
}
