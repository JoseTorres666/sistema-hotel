<?php

namespace App\Models;

use CodeIgniter\Model;

class VentaModel extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'id';

    protected $allowedFields = 
    [
        'id_usuario', 'id_estancia', 'total'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = '';
    protected $deletedField  = '';

    public function insertarVenta($id_usuario, $id_estancia, $total){
        $this->insert(
            [
                'id_usuario'=>$id_usuario,
                'id_estancia'=>$id_estancia,
                'total'=>$total
            ]
            );
        return $this->insertID();    
    }
}
