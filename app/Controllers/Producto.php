<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use CodeIgniter\Controller;

class Producto extends Controller
{
    protected $productoModel;

    public function __construct()
    {
        // Inicializar el modelo
        $this->productoModel = new ProductoModel();
    }

    public function index()
    {
        // Usar el modelo para obtener los productos con estado 1
        $productos = $this->productoModel->where('estado', 1)->findAll();

        // Pasar los productos a la vista
        $data['productos'] = $productos;

        echo view('template/header');
        echo view('producto/listar', $data);
        echo view('template/footer');
    }
    public function agregar()
    {
        echo view('template/header'); 
        echo view('producto/agregar');
        echo view('template/footer');
    }

    public function agregarbd(){

        $rules = 
        [
            'nombres' => 'required',
            'descripcion' => 'required',
            'precio_compra' => 'required',
            'stock' => 'required'
        ];

        if ($this->validate($rules)) {
            $data = [
                'nombres' => strtoupper($this->request->getPost('nombres')),
                'descripcion' => strtoupper($this->request->getPost('descripcion')),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock' => $this->request->getPost('stock')
            ];
            $this->productoModel->save($data);
            return redirect()->to(base_url('producto'))->with('success', 'producto agregado con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function subirfoto(){


    }
}
