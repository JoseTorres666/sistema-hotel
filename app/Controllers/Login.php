<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Login extends BaseController
{
    protected $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }

    public function index()
    {
        echo view('login');
    }

    public function validar()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $datosusuario = $this->usuario->where('email', $email)->first();

            if ($datosusuario) {
                if (password_verify($password, $datosusuario['password'])) {
                    $sesion = [
                        'id' => $datosusuario['id'],
                        'email' => $datosusuario['email'],
                        'isLoggedIn' => true,
                    ];
                    session()->set($sesion);
                    return redirect()->to('/dashboard'); // Redirige al dashboard u otra página segura
                } else {
                    return redirect()->back()->withInput()->with('error', 'Contraseña incorrecta.');
                }
            } else {
                return redirect()->back()->withInput()->with('error', 'El usuario no existe.');
            }
        } else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
