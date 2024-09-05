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

    // Método privado para cargar vistas comunes
    private function cargarVistas($vista, $data = [])
    {
        echo view('template/header');
        echo view($vista, $data);
        echo view('template/footer');
    }

    // Método privado para transformar los datos del huésped
    private function transformarDatosHuesped($datos)
    {
        return [
            'nombres' => strtoupper($datos['nombres']),
            'apellidos' => strtoupper($datos['apellidos']),
            'nacionalidad' => strtoupper($datos['nacionalidad']),
            'fecha_nacimiento' => $datos['fecha_nacimiento'],
            'estado_civil' => strtoupper($datos['estado_civil']),
            'profesion' => strtoupper($datos['profesion']),
            'tipo_documento' => strtoupper($datos['tipo_documento']),
            'numero_documento' => $datos['numero_documento'],
            'procedencia' => strtoupper($datos['procedencia']),
        ];
    }

    public function index()
    {
        $data['huespedes'] = $this->huespedModel->getHuespedesConEdad();
        $data['message'] = session()->getFlashdata('message'); // Añadir el mensaje a la vista
        $this->cargarVistas('huesped/listar', $data);
    }

    public function agregar()
    {
        $this->cargarVistas('huesped/agregar');
    }

    public function agregarbd()
    {
        $huespedData = $this->transformarDatosHuesped($this->request->getPost());
        $this->huespedModel->save($huespedData);

        // Establecer mensaje de éxito
        return redirect()->to(base_url('huesped'))->with('message', 'Huésped agregado exitosamente');
    }

    public function editar($id)
    {
        $data['huesped'] = $this->huespedModel->find($id);
        $this->cargarVistas('huesped/editar', $data);
    }

    public function actualizarbd()
    {
        $idHuesped = $this->request->getPost('id');
        $huespedData = $this->transformarDatosHuesped($this->request->getPost());

        $this->huespedModel->update($idHuesped, $huespedData);

        // Establecer mensaje de éxito
        return redirect()->to(base_url('huesped'))->with('message', 'Huésped actualizado exitosamente');
    }

    public function eliminarbd($id)
    {
        $this->huespedModel->update($id, ['estado' => 0]);

        // Establecer mensaje de éxito
        return redirect()->to(base_url('huesped'))->with('message', 'Huésped eliminado exitosamente');
    }

    public function eliminados()
    {
        $data['huespedes'] = $this->huespedModel->getHuespedesInactivosConEdad();
        $data['message'] = session()->getFlashdata('message'); // Añadir el mensaje a la vista
        $this->cargarVistas('huesped/eliminados', $data);
    }

    public function integrar($id)
    {
        $this->huespedModel->update($id, ['estado' => 1]);

        // Establecer mensaje de éxito
        return redirect()->to(base_url('huesped/eliminados'))->with('message', 'Huésped restaurado exitosamente');
    }
}
