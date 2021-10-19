<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
    
        echo view('pages/home', $data);
  
    }
    public function about()
    {
        $data = [
            'title' => 'Pertandingan'
        ];
        echo view('pages/about', $data);
    }
    public function berita()
    {
        $data = [
            'title' => 'berita'
        ];
        echo view('pages/berita', $data);
    }

    public function contact()
    {
        $data =[
            'title' => 'Contact Us'
        ];
        echo view('pages/contact', $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Gallery'
        ];
        echo view('pages/gallery', $data);
    }
}
