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
        $huespedes = $this->findAll();

        foreach ($huespedes as &$huesped) {
            $huesped['edad'] = $this->calcularEdad($huesped['fecha_nacimiento']);
        }

        return $huespedes;
    }

    private function calcularEdad($fecha_nacimiento)
    {
        $fecha_nacimiento = new \DateTime($fecha_nacimiento);
        $hoy = new \DateTime();
        $edad = $hoy->diff($fecha_nacimiento)->y;

        return $edad;
    }
}
