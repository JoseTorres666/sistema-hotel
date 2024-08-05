<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id';

    protected $allowedFields = ['descripcion', 'unidad_medida', 'precio_base','cantidad_productos', 'estado'];

    /* 

    id int AI PK 
    id_categoria int 
    nombre varchar(255) 
    precio_venta decimal(7,2) 
    precio_compra decimal(7,2) 
    stck int 
    estado

    */
    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';
}
