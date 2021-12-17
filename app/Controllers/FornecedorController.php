<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FornecedorModel;


class FornecedorController extends BaseController
{

    private $fornecedorModel;


    public function __Construct(){
        $this->fornecedorModel = new FornecedorModel();
    }


    public function index()
    {
        return view('fornecedor', ['fornecedores'=>$this->fornecedorModel->findAll()]);
    }

}
