<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HuespedModel;

class Huesped extends BaseController
{
    protected $huespedModel;

    public function __construct()
    {
        $this->huespedModel = new HuespedModel();
    }

    public function index()
    {
        $huespedes = $this->huespedModel->getHuespedesConEdad();
        
        $data['huespedes'] = $huespedes;
        
        echo view('template/header'); 
        echo view('huesped/listar', $data);
        echo view('template/footer');
    }

    public function agregar()
    {
        echo view('template/header'); 
        echo view('huesped/agregar');
        echo view('template/footer');
    }

    public function agregarbd()
    {
        // Datos del huésped transformados a mayúsculas
        $huespedData = [
            'nombres' => strtoupper($this->request->getPost('nombres')),
            'apellidos' => strtoupper($this->request->getPost('apellidos')),
            'nacionalidad' => strtoupper($this->request->getPost('nacionalidad')),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'estado_civil' => strtoupper($this->request->getPost('estado_civil')),
            'profesion' => strtoupper($this->request->getPost('profesion')),
            'tipo_documento' => strtoupper($this->request->getPost('tipo_documento')),
            'numero_documento' => $this->request->getPost('numero_documento'),
            'procedencia' => strtoupper($this->request->getPost('procedencia')),
        ];

        // Guardar huésped
        $this->huespedModel->save($huespedData);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped'));
    }

    public function editar($id)
    {
        // Encontrar el huésped por ID
        $huesped = $this->huespedModel->find($id);
        $data['huesped'] = $huesped; // Mantén la clave como 'huesped'

        echo view('template/header'); 
        echo view('huesped/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        // Obtener el ID del huésped
        $idHuesped = $this->request->getPost('id');

        // Datos del huésped transformados a mayúsculas
        $huespedData = [
            'nombres' => strtoupper($this->request->getPost('nombres')),
            'apellidos' => strtoupper($this->request->getPost('apellidos')),
            'nacionalidad' => strtoupper($this->request->getPost('nacionalidad')),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
            'estado_civil' => strtoupper($this->request->getPost('estado_civil')),
            'profesion' => strtoupper($this->request->getPost('profesion')),
            'tipo_documento' => strtoupper($this->request->getPost('tipo_documento')),
            'numero_documento' => $this->request->getPost('numero_documento'),
            'procedencia' => strtoupper($this->request->getPost('procedencia')),
        ];

        // Actualizar huésped
        $this->huespedModel->update($idHuesped, $huespedData);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped'));
    }

    public function eliminarbd($id)
    {
        // Borrado lógico
        $this->huespedModel->update($id, ['estado' => 0]);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped'))->with('message', 'Huésped eliminado exitosamente');
    }

    public function eliminados()
    {
        // Obtener los huéspedes eliminados
        $huespedes = $this->huespedModel->where('estado', 0)->findAll();
        $data['huespedes'] = $huespedes;
        
        echo view('template/header'); 
        echo view('huesped/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        // Restaurar huésped
        $this->huespedModel->update($id, ['estado' => 1]);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped/eliminados'))->with('message', 'Huésped restaurado exitosamente');
    }

}
