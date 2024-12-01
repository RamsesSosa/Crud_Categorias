<?php
namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model {
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['nombre', 'descripcion', 'usuarios_id'];  // Asegúrate de incluir usuarios_id

    protected $useTimestamps = true;
}


