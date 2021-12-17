<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;


class CategoriaController extends BaseController
{

    private $categoriaModel;


    public function __Construct(){
        $this->categoriaModel = new CategoriaModel();
    }


    public function index()
    {
        return view('categoria', [
            'categorias' => $this->categoriaModel->findAll()
        ]);
    }


}
