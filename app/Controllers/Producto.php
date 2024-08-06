<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;
use App\Models\CategoriaModel;

class Producto extends BaseController
{
    protected $producto;
    protected $categoria;

    public function __construct()
    {
        $this->producto = new ProductoModel();
        $this->categoria = new CategoriaModel();
    }

    public function index()
    {
        $productos = $this->producto
            ->select('producto.*, categoria.nombre as categoria_nombre')
            ->join('categoria', 'producto.id_categoria = categoria.id')
            ->where('producto.estado', 1)
            ->findAll();
        
        $data['productos'] = $productos;

        echo view('template/header'); 
        echo view('producto/listar', $data);
        echo view('template/footer');
    }

    public function agregar()
    {
        $categorias = $this->categoria->where('estado', 1)->findAll();
        $data['categorias'] = $categorias;

        echo view('template/header'); 
        echo view('producto/agregar', $data);
        echo view('template/footer');
    } 

    public function agregarbd()
    {
        $rules = [
            'id_categoria' => 'required',
            'nombre' => 'required',
            'precio_venta' => 'required',
            'precio_compra' => 'required',
            'stock' => 'required'
        ];

        if ($this->validate($rules)) {
            $data = [
                'id_categoria' => $this->request->getPost('id_categoria'),
                'nombre' => strtoupper($this->request->getPost('nombre')),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock' => $this->request->getPost('stock')
            ];

            $this->producto->save($data);
            return redirect()->to(base_url('producto'))->with('success', 'Producto agregado con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function editar($id)
    {
        $producto = $this->producto->find($id);
        $categorias = $this->categoria->where('estado', 1)->findAll();
        $data['producto'] = $producto;
        $data['categorias'] = $categorias;

        echo view('template/header'); 
        echo view('producto/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        $rules = [
            'id_categoria' => 'required',
            'nombre' => 'required',
            'precio_venta' => 'required',
            'precio_compra' => 'required',
            'stock' => 'required'
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $data = [
                'id_categoria' => $this->request->getPost('id_categoria'),
                'nombre' => strtoupper($this->request->getPost('nombre')),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock' => $this->request->getPost('stock')
            ];

           $this->producto->update($id, $data);
            return redirect()->to(base_url('producto'))->with('success', 'Producto actualizado con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function eliminarbd($id)
    {
        $this->producto->update($id, ['estado' => 0]);
        return redirect()->to(base_url('producto'))->with('success', 'Producto eliminado con éxito');
    }

    public function eliminados()
    {
        $productos = $this->producto
            ->select('producto.*, categoria.nombre as categoria_nombre')
            ->join('categoria', 'producto.id_categoria = categoria.id')
            ->where('producto.estado', 0)
            ->findAll();
        
        $data['productos'] = $productos;

        echo view('template/header'); 
        echo view('producto/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        $this->producto->update($id, ['estado' => 1]);
        return redirect()->to(base_url('producto/eliminados'))->with('success', 'Producto reintegrado con éxito');
    }
    
}
