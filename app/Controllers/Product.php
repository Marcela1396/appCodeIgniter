<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('products/list');
    }
}
