<?php

namespace App\Models;

use CodeIgniter\Model;

class HuespedModel extends Model
{
    protected $table = 'huesped';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombres', 'apellidos', 'nacionalidad', 'fecha_nacimiento', 
        'estado_civil', 'profesion', 'tipo_documento', 'numero_documento', 
        'procedencia', 'estado'
    ];

    public function getHuespedesConEdad()
    {
        return $this->select("*, TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) as edad")
                    ->where('estado', 1)
                    ->findAll();
    }

    public function getHuespedesInactivosConEdad()
    {
        return $this->select("*, TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) as edad")
                    ->where('estado', 0)
                    ->findAll();
    }

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';

}
