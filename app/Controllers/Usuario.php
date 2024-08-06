<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    protected $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }

    public function index()
    {
        $usuarios = $this->usuario->where('estado', 1)->findAll();
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
        sad
    }

    public function agregarbd()
    {
        // Datos de usuario transformados a mayúsculas
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

        // Guardar usuario
        $this->usuario->save($usuarioData);

        // Redireccionar con éxito
        return redirect()->to(base_url('usuario'));
    }


    public function editar($id)
    {
        $usuario = $this->usuario->find($id);
        $data['usuario'] = $usuario; // Cambiado 'usuarios' a 'usuario' para mayor claridad

        echo view('template/header'); 
        echo view('usuario/editar', $data);
        echo view('template/footer');
    }

    public function actualizarbd()
    {
        // Obtener el ID del usuario
        $idusuario = $this->request->getPost('idusuario');

        // Datos de usuario transformados a mayúsculas
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

        // Actualizar usuario
        $this->usuario->update($idusuario, $usuarioData);

        // Redireccionar con éxito
        return redirect()->to(base_url('usuario'));
    }


    public function eliminarbd($id)
    {
        // Borrado lógico
        $this->usuario->update($id, ['estado' => 0]);

        // Redireccionar con éxito
        return redirect()->to(base_url('usuario'))->with('message', 'Usuario eliminado exitosamente');
    }

    public function eliminados()
    {
        $usuarios = $this->usuario->where('estado', 0)->findAll();
        $data['usuarios'] = $usuarios;
        
        echo view('template/header'); 
        echo view('usuario/eliminados', $data);
        echo view('template/footer');
    }

    public function integrar($id)
    {
        // Restaurar usuario
        $this->usuario->update($id, ['estado' => 1]);

        // Redireccionar con éxito
        return redirect()->to(base_url('usuario/eliminados'))->with('message', 'Usuario restaurado exitosamente');
    }
}
