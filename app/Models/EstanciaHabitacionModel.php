<?php

namespace App\Models;

use CodeIgniter\Model;

class EstanciaHabitacionModel extends Model
{
    protected $table = 'estancia_habitacion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_estancia', 'id_habitacion'];
}
