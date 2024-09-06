<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleProductoModel extends Model
{
    protected $table = 'detalle_producto';
    protected $primaryKey = 'id';

    protected $allowedFields = 
    [
        'id_producto', 'id_venta', 'catidad'
    ];
    
    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = '';
    protected $deletedField  = '';
}