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
    
    public function agendapost()
    {
        return view('agendapost');
    }

    public function pengumuman()
    {
        return view('pengumuman');
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
    
    public function media()
    {
        return view('media');
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
    public function post()
    {
        return view('post');
    }
    public function artikel()
    {
        return view('artikel');
    }
    
    public function artikeldetail()
    {
        return view('artikeldetail');
    }
    
}
