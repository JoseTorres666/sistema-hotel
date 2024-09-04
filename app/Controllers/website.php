<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HabitacionModel;

class Website extends BaseController
{

    public function index()
    {
        
        echo view('website/index');
    }
}