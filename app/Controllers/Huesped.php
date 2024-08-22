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




    /*public function agregar()
    {
        echo view('template/header'); 
        echo view('huesped/agregar');
        echo view('template/footer');
    }

    public function agregarbd()
    {
        // Datos de huesped transformados a mayúsculas
        $usuarioData = [
            'nombres' => strtoupper($this->request->getPost('nombres')),
            'apellido_paterno' => strtoupper($this->request->getPost('apellido_paterno')),
            'apellido_materno' => strtoupper($this->request->getPost('apellido_materno')),
            'telefono' => $this->request->getPost('telefono'),
            'sueldo' => $this->request->getPost('sueldo'),
            'rol' => strtoupper($this->request->getPost('rol')),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT) // Asegurando la contraseña
        ];

        // Guardar huesped
        $this->huespedModel->save($usuarioData);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped'));
    }


    public function editar($id)
    {
        $huesped = $this->huespedModel->find($id);
        $data['huesped'] = $huesped; // Cambiado 'huesped' a 'huesped' para mayor claridad

        echo view('template/header'); 
        echo view('huesped/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        // Obtener el ID del huesped
        $idusuario = $this->request->getPost('idusuario');

        // Datos de huesped transformados a mayúsculas
        $usuarioData = [
            'nombres' => strtoupper($this->request->getPost('nombres')),
            'apellido_paterno' => strtoupper($this->request->getPost('apellido_paterno')),
            'apellido_materno' => strtoupper($this->request->getPost('apellido_materno')),
            'telefono' => $this->request->getPost('telefono'),
            'sueldo' => $this->request->getPost('sueldo'),
            'rol' => strtoupper($this->request->getPost('rol')),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT) // Asegurando la contraseña
        ];

        // Actualizar huesped
        $this->huespedModel->update($idusuario, $usuarioData);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped'));
    }


    public function eliminarbd($id)
    {
        // Borrado lógico
        $this->huespedModel->update($id, ['estado' => 0]);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped'))->with('message', 'huesped eliminado exitosamente');
    }

    public function eliminados()
    {
        $huesped = $this->huespedModel->where('estado', 0)->findAll();
        $data['huesped'] = $huesped;
        
        echo view('template/header'); 
        echo view('huesped/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        // Restaurar huesped
        $this->huespedModel->update($id, ['estado' => 1]);

        // Redireccionar con éxito
        return redirect()->to(base_url('huesped/eliminados'))->with('message', 'huesped restaurado exitosamente');
    }*/
}
