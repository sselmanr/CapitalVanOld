<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo view('header_view');
        echo view('home_view');
        return view('footer_view');
    }
}
