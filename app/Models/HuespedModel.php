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
        $builder = $this->db->table($this->table);
        $builder->select('id, nombres, apellidos, nacionalidad, fecha_nacimiento, TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) AS edad','estado_civil', 'profesion', 'tipo_documento', 'numero_documento', 
        'procedencia');
        $builder->where('estado', 1);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
