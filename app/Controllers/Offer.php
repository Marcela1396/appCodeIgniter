<?php

namespace App\Controllers;

class Offer extends BaseController
{
    public function index()
    {
        return view('offers/list');
    }
}
