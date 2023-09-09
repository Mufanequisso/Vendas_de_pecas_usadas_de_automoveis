<?php

namespace App\Models;

use CodeIgniter\Model;

class jantesModel extends Model
{
    protected $table      = 'jantes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ano', 'fabricante','cor','preco','imagem'];

    // Dates

    
    
}