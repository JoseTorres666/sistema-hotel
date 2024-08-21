<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use CodeIgniter\Controller;

class Producto extends Controller
{
    protected $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }

    public function index()
    {
        $productos = $this->productoModel->where('estado', 1)->findAll();
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

    public function agregarbd()
    {
        // Reglas de validación para el formulario, incluyendo la imagen
        $rules = [
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio_compra' => 'required|decimal',
            'stock' => 'required|integer',
            'imagen' => 'uploaded[imagen]|is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png]'
        ];

        if ($this->validate($rules)) {
            // Obtener la imagen y los datos del formulario
            $file = $this->request->getFile('imagen');

            if ($file->isValid() && !$file->hasMoved()) {
                // Guardar inicialmente los datos en la base de datos sin la imagen
                $data = [
                    'nombre' => strtoupper($this->request->getPost('nombre')),
                    'descripcion' => strtoupper($this->request->getPost('descripcion')),
                    'precio_compra' => $this->request->getPost('precio_compra'),
                    'stock' => $this->request->getPost('stock'),
                    'estado' => 1,
                    'id_usuario' => session()->get('id_usuario'),
                    'imagen' => '' // Inicialmente vacío, se actualizará después
                ];

                // Guardar el producto para obtener la ID
                $id = $this->productoModel->insert($data);
                
                if ($id) {
                    // Definir el nombre de la imagen usando la ID del producto
                    $nombreArchivo = $id . '.' . $file->getExtension();
                    
                    // Intentar mover el archivo
                    if ($file->move('./imagen/producto/', $nombreArchivo)) {
                        // Actualizar el registro con el nombre de la imagen
                        $this->productoModel->update($id, ['imagen' => $nombreArchivo]);
                        return redirect()->to(base_url('producto'))->with('success', 'Producto agregado con éxito');
                    } else {
                        // Si el archivo no se mueve, muestra un mensaje de error
                        return redirect()->back()->with('error', 'No se pudo mover la imagen.');
                    }
                } else {
                    // Si no se pudo insertar el producto, muestra un mensaje de error
                    return redirect()->back()->with('error', 'No se pudo guardar el producto.');
                }
            } else {
                return redirect()->back()->with('error', 'No se pudo procesar la imagen.');
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
            'precio_compra' => 'required|decimal',
            'stock' => 'required|integer',
            'imagen' => 'uploaded[imagen]|is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png]'
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $data = [
                'nombre' => strtoupper($this->request->getPost('nombre')),
                'descripcion' => strtoupper($this->request->getPost('descripcion')),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock' => $this->request->getPost('stock')
            ];

            // Manejar la imagen si se ha subido
            $file = $this->request->getFile('imagen');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                // Definir el nombre del archivo
                $nombreArchivo = $id . '.' . $file->getExtension();
                
                // Mover el archivo
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
        // Verificar si el producto existe
        $producto = $this->productoModel->find($id);
        if (!$producto) {
            return redirect()->to(base_url('producto'))->with('error', 'Producto no encontrado.');
        }

        // Realizar el borrado lógico cambiando el estado a 0
        $this->productoModel->update($id, ['estado' => 0]);

        return redirect()->to(base_url('producto'))->with('message', 'Producto eliminado exitosamente');
    }
    public function integrar($id)
    {
        // Verificar si el producto existe
        $producto = $this->productoModel->find($id);
        if (!$producto) {
            return redirect()->to(base_url('producto/eliminados'))->with('error', 'Producto no encontrado.');
        }

        // Restaurar el producto cambiando el estado a 1
        $this->productoModel->update($id, ['estado' => 1]);

        return redirect()->to(base_url('producto/eliminados'))->with('message', 'Producto restaurado exitosamente');
    }


}

