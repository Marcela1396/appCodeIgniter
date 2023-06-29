<?php

namespace App\Controllers;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        //Hace uso de la función predefinida findAll()
        $category_model = new CategoryModel();
        $data = $category_model->findAll();
        $data = ['data' => $data];
        return view('category/list', $data);
    }

    public function index2()
    {
        // Hace uso del Query Builder del framework
        $category_model = new CategoryModel();
        $data = $category_model->getCategories();
        $data = ['data' => $data];
        return view('category/list2', $data);
    }

}

