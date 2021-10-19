<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pertandingan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pertandingan'
        ];
    
        echo view('pages/about', $data);
    }
}
