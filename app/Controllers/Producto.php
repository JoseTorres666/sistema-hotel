<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class Producto extends BaseController
{
    protected $producto;

    public function __construct()
    {
        $this->producto = new ProductoModel();
    }

    public function index()
    {
        $productos = $this->producto->where('estado', 1)->findAll();
        $data['productos'] = $productos;
        
        echo view('template/header'); 
        echo view('lista_producto', $data);
        echo view('template/footer');
    }

    public function agregar()
    {
        echo view('template/header'); 
        echo view('agregar_producto');
        echo view('template/footer');
    }

    public function agregarbd()
    {
        $productoData = [
            'descripcion' => $this->request->getPost('descripcion'),
            'unidad_medida' => $this->request->getPost('unidad_medida'),
            'precio_base' => $this->request->getPost('precio_base'),
            'cantidad_productos' => $this->request->getPost('cantidad_productos')
        ];

        $this->producto->save($productoData);

        return redirect()->to(base_url('producto'))->with('message', 'Producto agregado exitosamente');
    }

    public function editar($id)
    {
        $producto = $this->producto->where('idproducto', $id)->first();
        $data['producto'] = $producto;

        echo view('template/header'); 
        echo view('editar_producto', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        $idproducto = $this->request->getPost('idproducto');

        $productoData = [
            'unidad_medida' => $this->request->getPost('unidad_medida'),
            'precio_venta' => $this->request->getPost('precio_venta'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_actualizacion' => date('Y-m-d H:i:s')
        ];

        if ($this->producto->update($idproducto, $productoData)) {
            return redirect()->to(base_url('producto'))->with('message', 'Producto editado exitosamente');
        } else {
            return redirect()->back()->with('error', 'Error al editar el producto')->withInput();
        }
    }

    public function eliminarbd($idproducto)
    {
        $this->producto->update($idproducto, ['estado' => 0]);

        return redirect()->to(base_url('producto'))->with('message', 'Producto eliminado exitosamente');
    }

    public function eliminados()
    {
        $productos = $this->producto->where('estado', 0)->findAll();
        $data['productos'] = $productos;
        
        echo view('template/header'); 
        echo view('productos_eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($idproducto)
    {
        $this->producto->update($idproducto, ['estado' => 1]);

        return redirect()->to(base_url('producto/eliminados'))->with('message', 'Producto restaurado exitosamente');
    }
}
