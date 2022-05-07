<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
}
