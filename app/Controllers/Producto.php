<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\DetalleProductoModel;
use CodeIgniter\Controller;

class Producto extends Controller
{
    protected $productoModel;
    protected $detalleProductoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
        $this->detalleProductoModel = new DetalleProductoModel();
    }

    public function index()
    {
        $data['productos'] = $this->productoModel->findAll(); // Correcta asignación

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

    public function agregarbd()
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio_compra' => 'required',
            'stock' => 'required'
        ];

        if ($this->validate($rules)) {
            $file = $this->request->getFile('imagen');

            $dataProducto = [
                'nombre' => strtoupper($this->request->getPost('nombre')),
                'descripcion' => strtoupper($this->request->getPost('descripcion')),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock' => $this->request->getPost('stock'),
                'estado' => 1,
                'id_usuario' => session()->get('id_usuario'),
                'imagen' => ''
            ];

            $idProducto = $this->productoModel->insert($dataProducto);

            if ($idProducto) {
                if ($file && $file->isValid() && !$file->hasMoved()) {
                    $nombreArchivo = $idProducto . '.' . $file->getExtension();
                    if ($file->move('./imagen/producto/', $nombreArchivo)) {
                        $this->productoModel->update($idProducto, ['imagen' => $nombreArchivo]);
                    } else {
                        return redirect()->back()->with('error', 'No se pudo mover la imagen.');
                    }
                }

                return redirect()->to(base_url('producto'))->with('success', 'Producto agregado con éxito');
            } else {
                return redirect()->back()->with('error', 'No se pudo guardar el producto.');
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }


    public function editar($id)
    {
        $producto = $this->productoModel->find($id);

        if (!$producto) {
            return redirect()->to(base_url('producto'))->with('error', 'Producto no encontrado.');
        }

        $data['producto'] = $producto;

        echo view('template/header');
        echo view('producto/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio_compra' => 'required',
            'stock' => 'required'
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $data = [
                'nombre' => strtoupper($this->request->getPost('nombre')),
                'descripcion' => strtoupper($this->request->getPost('descripcion')),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock' => $this->request->getPost('stock')
            ];

            $file = $this->request->getFile('imagen');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $nombreArchivo = $id . '.' . $file->getExtension();
                if ($file->move('./imagen/producto/', $nombreArchivo)) {
                    $data['imagen'] = $nombreArchivo;
                } else {
                    return redirect()->back()->withInput()->with('error', 'No se pudo mover la imagen.');
                }
            }

            if ($this->productoModel->update($id, $data)) {
                return redirect()->to(base_url('producto'))->with('success', 'Producto actualizado con éxito');
            } else {
                return redirect()->back()->withInput()->with('errors', ['update' => 'No se pudo actualizar el producto.']);
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function eliminados()
    {
        $productos = $this->productoModel->where('estado', 0)->findAll();
        $data['productos'] = $productos;

        echo view('template/header');
        echo view('producto/eliminados', $data);
        echo view('template/footer');
    }

    public function eliminarbd($id)
    {
        $producto = $this->productoModel->find($id);
        if (!$producto) {
            return redirect()->to(base_url('producto'))->with('error', 'Producto no encontrado.');
        }

        $this->productoModel->update($id, ['estado' => 0]);

        return redirect()->to(base_url('producto'))->with('message', 'Producto eliminado exitosamente');
    }

    public function integrar($id)
    {
        $producto = $this->productoModel->find($id);
        if (!$producto) {
            return redirect()->to(base_url('producto/eliminados'))->with('error', 'Producto no encontrado.');
        }

        $this->productoModel->update($id, ['estado' => 1]);

        return redirect()->to(base_url('producto/eliminados'))->with('message', 'Producto restaurado exitosamente');
    }

    
}

