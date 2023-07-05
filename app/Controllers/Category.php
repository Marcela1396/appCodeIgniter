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

    public function form_registro()
    {
        return view('category/registration');
    }

    public function registrar()
    {
        $category_model = new CategoryModel();
       
        $data = [
            'id' => $this->request->getPost('id_categoria'),
            'nom_categoria'  => $this->request->getPost('nom_categoria'),
            'desc_categoria'  => $this->request->getPost('desc_categoria')
        ];
        $category_model->insert($data);
        return redirect()->to(base_url().'categorias');
    }

}

