<?php

namespace App\Controllers;

use App\Controller\BaseController;
use App\Models\VentasModel;
use App\Models\DetalleProductoModel;
use App\Models\ProductoModel;


class Venta extends Controller
{
    protected $ventasModel;
    protected $detalleProductoModel;
    protected $productoModel;

    public function __construct()
    {
        $this->ventasModel = new VentasModel();
        $this->detalleProductoModel = new DetalleProductoModel();
        $this->productoModel = new ProductoModel();
    }

    
}

