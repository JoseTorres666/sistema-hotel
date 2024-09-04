<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HabitacionModel;

class Habitacion extends BaseController
{
    protected $habitacionModel;

    public function __construct()
    {
        $this->habitacionModel = new HabitacionModel(); // Usando HabitacionModel en lugar de HuespedModel
    }

    public function index()
    {
        // Obtener habitaciones (puedes modificar la lógica según lo que necesites)
        $habitaciones = $this->habitacionModel->where('estado !=', 0)->findAll();

        $data['habitaciones'] = $habitaciones;
        
        echo view('template/header'); 
        echo view('habitacion/listar', $data);
        echo view('template/footer');
    }
    public function estancia()
    {
       
        echo view('template/header'); 
        echo view('habitacion/estancia');
        echo view('template/footer');
    }
    public function accion()
    {
        // Obtener habitaciones (puedes modificar la lógica según lo que necesites)
        $habitaciones = $this->habitacionModel->where('estado !=', 0)->findAll();

        $data['habitaciones'] = $habitaciones;
        
        echo view('template/header'); 
        echo view('habitacion/accion', $data);
        echo view('template/footer');
    }

    public function agregar()
    {
        echo view('template/header'); 
        echo view('habitacion/agregar');
        echo view('template/footer');
    }

    public function agregarbd()
    {
        // Datos de la habitación
        $habitacionData = [
            'numero' => strtoupper($this->request->getPost('numero')),
            'precio' => $this->request->getPost('precio'),
            'piso' => strtoupper($this->request->getPost('piso')),
            'categoria' => strtoupper($this->request->getPost('categoria'))
        ];

        // Guardar habitación
        $this->habitacionModel->save($habitacionData);

        // Redireccionar con éxito
        return redirect()->to(base_url('habitacion'));
    }

    public function editar($id)
    {
        // Encontrar la habitación por ID
        $habitacion = $this->habitacionModel->find($id);
        $data['habitacion'] = $habitacion;

        echo view('template/header'); 
        echo view('habitacion/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        // Obtener el ID de la habitación
        $idHabitacion = $this->request->getPost('id');

        // Datos de la habitación
        $habitacionData = [
            'numero' => strtoupper($this->request->getPost('numero')),
            'precio' => $this->request->getPost('precio'),
            'piso' => strtoupper($this->request->getPost('piso')),
            'categoria' => strtoupper($this->request->getPost('categoria')),
            'estado' => $this->request->getPost('estado')
        ];

        // Actualizar habitación
        $this->habitacionModel->update($idHabitacion, $habitacionData);

        // Redireccionar con éxito
        return redirect()->to(base_url('habitacion/accion'));
    }

    public function eliminarbd($id)
    {
        // Borrado lógico de la habitación
        $this->habitacionModel->update($id, ['estado' => 0]);

        // Redireccionar con éxito
        return redirect()->to(base_url('habitacion'))->with('message', 'Habitación eliminada exitosamente');
    }

    public function eliminados()
    {
        // Obtener habitaciones inactivas
        $habitaciones = $this->habitacionModel->where('estado', 0)->findAll();
        $data['habitaciones'] = $habitaciones;

        echo view('template/header');
        echo view('habitacion/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        // Restaurar habitación
        $this->habitacionModel->update($id, ['estado' => 1]);

        // Redireccionar con éxito
        return redirect()->to(base_url('habitacion/eliminados'))->with('message', 'Habitación restaurada exitosamente');
    }
}
