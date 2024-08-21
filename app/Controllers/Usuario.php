<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    protected $usuario;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        
    }

    public function index()
    {
        /*if (!session()->get('isLoggedIn')) {
            return redirect()->to('login');
        }*/

        $usuarios = $this->usuarioModel->where('estado', 1)->findAll();
        $data['usuarios'] = $usuarios;
        
        echo view('template/header'); 
        echo view('usuario/listar', $data);
        echo view('template/footer');
    }


    public function agregar()
    {
        echo view('template/header'); 
        echo view('usuario/agregar');
        echo view('template/footer');
    }

    public function agregarbd()
    {
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'telefono' => 'required',
            'rol' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
        if ($this->validate($rules)) {
            $data = [
                'nombres' => strtoupper($this->request->getPost('nombres')),
                'apellido_paterno' => strtoupper($this->request->getPost('apellido_paterno')),
                'apellido_materno' => strtoupper($this->request->getPost('apellido_materno')),
                'telefono' => $this->request->getPost('telefono'),
                'rol' => strtoupper($this->request->getPost('rol')),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];
            $this->usuarioModel->save($data);
            return redirect()->to(base_url('usuario'))->with('success', 'usuario agregado con éxito');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }    
    }

    public function editar($id)
    {
        $usuario = $this->usuarioModel->find($id);
        $data['usuario'] = $usuario; // Cambiado 'usuarios' a 'usuario' para mayor claridad

        echo view('template/header'); 
        echo view('usuario/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'telefono' => 'required',
            'rol' => 'required',
            'email' => 'required'
        ];
        
        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $data = [
                'nombres' => strtoupper($this->request->getPost('nombres')),
                'apellido_paterno' => strtoupper($this->request->getPost('apellido_paterno')),
                'apellido_materno' => strtoupper($this->request->getPost('apellido_materno')),
                'telefono' => $this->request->getPost('telefono'),
                'rol' => strtoupper($this->request->getPost('rol')),
                'email' => $this->request->getPost('email')
            ];

            // Depuración
            if ($id === null) {
                return redirect()->back()->withInput()->with('errors', ['id' => 'ID de usuario no proporcionado.']);
            }

            // Depuración
            if ($this->usuarioModel->update($id, $data)) {
                return redirect()->to(base_url('usuario'))->with('success', 'Usuario actualizado con éxito');
            } else {
                return redirect()->back()->withInput()->with('errors', ['update' => 'No se pudo actualizar el usuario.']);
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }    
    }


    public function eliminarbd($id)
    {
        // Borrado lógico
        $this->usuarioModel->update($id, ['estado' => 0]);

        // Redireccionar con éxito
        return redirect()->to(base_url('usuario'))->with('message', 'Usuario eliminado exitosamente');
    }

    public function eliminados()
    {
        $usuarios = $this->usuarioModel->where('estado', 0)->findAll();
        $data['usuarios'] = $usuarios;
        
        echo view('template/header'); 
        echo view('usuario/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        // Restaurar usuario
        $this->usuarioModel->update($id, ['estado' => 1]);

        // Redireccionar con éxito
        return redirect()->to(base_url('usuario/eliminados'))->with('message', 'Usuario restaurado exitosamente');
    }

    // Función para mostrar el formulario de edición del usuario autenticado
    public function editarpassword()
    {
        // Obtiene el ID del usuario desde la sesión
        $id = session()->get('id');
        $usuario = $this->usuarioModel->find($id);
        $data['usuario'] = $usuario;

        echo view('template/header'); 
        echo view('usuario/cambiarpassword', $data);
        echo view('template/footer');
    }

    // Función para actualizar los datos del usuario autenticado
    public function actualizarpassword()
    {
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required'
        ];

        // Verifica si se está cambiando la contraseña
        if ($this->request->getPost('password') !== '') {
            $rules['password'] = 'required';
            $rules['current_password'] = 'required';
        }

        if ($this->validate($rules)) {
            // Obtiene el ID del usuario desde la sesión
            $id = session()->get('id');
            $usuario = $this->usuarioModel->find($id);

            // Verifica si la contraseña actual es correcta
            if ($this->request->getPost('password') !== '' && !password_verify($this->request->getPost('current_password'), $usuario['password'])) {
                return redirect()->back()->withInput()->with('errors', ['current_password' => 'La contraseña actual es incorrecta.']);
            }

            $data = [
                'nombres' => strtoupper($this->request->getPost('nombres')),
                'apellido_paterno' => strtoupper($this->request->getPost('apellido_paterno')),
                'apellido_materno' => strtoupper($this->request->getPost('apellido_materno')),
                'telefono' => $this->request->getPost('telefono')
            ];

            // Verifica si se está cambiando la contraseña
            if ($this->request->getPost('password') !== '') {
                $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
            }

            if ($this->usuarioModel->update($id, $data)) {
                return redirect()->to(base_url('usuario'))->with('success', 'Usuario actualizado con éxito');
            } else {
                return redirect()->back()->withInput()->with('errors', ['update' => 'No se pudo actualizar el usuario.']);
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }    
    }
}

