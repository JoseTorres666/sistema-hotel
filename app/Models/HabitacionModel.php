<?php

namespace App\Models;

use CodeIgniter\Model;

class HabitacionModel extends Model
{
    protected $table = 'habitacion';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'numero', 'precio', 'piso', 'categoria', 'estado', 'fecha_registro', 'fecha_actualizacion', 'id_usuario'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';
}