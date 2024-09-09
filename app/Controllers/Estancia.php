<?php

namespace App\Controllers;

use App\Models\HabitacionModel;

class Estancia extends BaseController
{
    protected $habitacionModel;

    public function __construct()
    {
        $this->habitacionModel = new HabitacionModel();
    }

    public function verHabitacion($id)
    {
        // Obtener la habitación con el ID proporcionado
        $habitacion = $this->habitacionModel->find($id);

        // Pasar los datos de la habitación a la vista
        echo view('template/header');
        echo view('habitacion/estancia', ['habitacion' => $habitacion]);
        echo view('template/footer');
    }

}
