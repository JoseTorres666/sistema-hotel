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

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';

    // Método genérico para obtener huéspedes con edad basado en el estado
    private function getHuespedesPorEstadoConEdad($estado)
    {
        return $this->select("*, TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) as edad")
                    ->where('estado', $estado)
                    ->findAll();
    }

    // Método para obtener huéspedes activos
    public function getHuespedesConEdad()
    {
        return $this->getHuespedesPorEstadoConEdad(1);
    }

    // Método para obtener huéspedes inactivos
    public function getHuespedesInactivosConEdad()
    {
        return $this->getHuespedesPorEstadoConEdad(0);
    }
}
