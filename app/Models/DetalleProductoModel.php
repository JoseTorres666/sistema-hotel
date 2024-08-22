<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleProductoModel extends Model
{
    protected $table = 'detalle_producto';
    protected $primaryKey = ['id_producto', 'id_venta']; // Clave primaria compuesta

    protected $allowedFields = ['id_producto', 'id_venta', 'cantidad', 'precio_unitario'];
}
