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
        echo view('lista_categoria', $data);
        echo view('template/footer');
    }

    public function agregar()
    {
        echo view('template/header'); 
        echo view('agregar_categoria');
        echo view('template/footer');
    } 

    public function agregarbd()
    {
        $data = [
            'nombre' => strtoupper($this->request->getPost('nombre'))
        ];

        $this->categoria->save($data);

        return redirect()->to(base_url('categoria'));
    }

    public function editar($id)
    {
        $categoria = $this->categoria->find($id);
        $data['categoria'] = $categoria; // Cambiado de 'categorias' a 'categoria'

        echo view('template/header'); 
        echo view('editar_categoria', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        $id = $this->request->getPost('id');

        $data = [
            'nombre' => strtoupper($this->request->getPost('nombre'))
        ];

        $this->categoria->update($id, $data);

        return redirect()->to(base_url('categoria'));
    }

    public function eliminarbd($id)
    {
        $this->categoria->update($id, ['estado' => 0]);

        return redirect()->to(base_url('categoria'));
    }

    public function eliminados()
    {
        $categorias = $this->categoria->where('estado', 0)->findAll();
        $data['categorias'] = $categorias;

        echo view('template/header'); 
        echo view('eliminadas_categorias', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        $this->categoria->update($id, ['estado' => 1]);

        return redirect()->to(base_url('categoria/eliminados'));
    }
}
