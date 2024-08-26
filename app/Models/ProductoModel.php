<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id';

    protected $allowedFields = 
    [
        'nombre', 'descripcion', 'precio_compra', 'precio_venta', 'stock', 'estado','imagen', 'id_usuario'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';
}
