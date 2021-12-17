<?php

namespace App\Models;

use CodeIgniter\Model;

class Categoria extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'inv_categoria';
    protected $primaryKey       = 'inv_categoria_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['inv_categoria_nome'];
}
