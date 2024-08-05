<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    protected $categoria;

    public function __construct()
    {
        $this->categoria = new CategoriaModel();
    }

    public function index()
    {
        $categorias = $this->categoria->where('estado', 1)->findAll();
        $data['categorias'] = $categorias;

        echo view('template/header'); 
        echo view('categoria/listar', $data);
        echo view('template/footer');
    }

    public function agregar()
    {
        echo view('template/header'); 
        echo view('categoria/agregar');
        echo view('template/footer');
    } 

    public function agregarbd()
    {
        $rules = [
            'nombre' => 'required'
        ];

        if ($this->validate($rules)) {
            $data = [
                'nombre' => strtoupper($this->request->getPost('nombre'))
            ];

            $this->categoria->save($data);
            return redirect()->to(base_url('categoria'))->with('success', 'Categoría agregada con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function editar($id)
    {
        $categoria = $this->categoria->find($id);
        $data['categorias'] = $categoria;

        echo view('template/header'); 
        echo view('categoria/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        $rules = [
            'nombre' => 'required'
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $data = [
                'nombre' => strtoupper($this->request->getPost('nombre'))
            ];

            $this->categoria->update($id, $data);
            return redirect()->to(base_url('categoria'))->with('success', 'Categoría actualizada con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function eliminarbd($id)
    {
        $this->categoria->update($id, ['estado' => 0]);
        return redirect()->to(base_url('categoria'))->with('success', 'Categoría eliminada con éxito');
    }

    public function eliminados()
    {
        $categorias = $this->categoria->where('estado', 0)->findAll();
        $data['categorias'] = $categorias;

        echo view('template/header'); 
        echo view('categoria/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        $this->categoria->update($id, ['estado' => 1]);
        return redirect()->to(base_url('categoria/eliminados'))->with('success', 'Categoría reintegrada con éxito');
    }
}
