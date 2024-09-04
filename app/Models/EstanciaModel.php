<?php

namespace App\Models;

use CodeIgniter\Model;

class EstanciaModel extends Model
{
    protected $table = 'estancia';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_usuario', 
        'id_huesped', 
        'fecha_ingreso', 
        'fecha_salida', 
        'estado_estancia', 
        'observaciones', 
        'estado'
    ];

    protected $useTtimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $dateFormat    = 'datetime';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
