<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleProductoModel  extends Model
{
    protected $table = 'detalle_producto';
    protected $primaryKey = 'id_producto';

    protected $allowedFields = 
    [
        'id_producto', 'cantidad', 'precio_unitario'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';
}
