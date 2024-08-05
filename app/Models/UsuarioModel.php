<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombres', 'apellido_paterno','apellido_materno', 'telefono', 'sueldo', 'rol', 'email', 'password', 'estado'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = 'fecha_actualizacion';
    protected $deletedField  = 'deleted_at';
}
