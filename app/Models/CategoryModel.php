<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    
    protected $table = 'categoria';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';

    protected $allowedFields = ['id', 'nom_categoria', 'desc_categoria'];


    public function getCategories()
    {
        $c = $this->db->query('Select * from categoria');
        return $c->getResult();
    }
}
