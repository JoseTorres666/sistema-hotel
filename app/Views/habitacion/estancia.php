
    <style>
        .header-section {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .header-section .badge {
            font-size: 1em;
            margin-left: 10px;
        }

        .form-section {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }

        .form-section .form-control, .form-section .form-select {
            margin-bottom: 10px;
        }

        .total-pagar {
            font-weight: bold;
            font-size: 1.5em;
            margin-top: 20px;
        }

        .btn-group {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <!-- Header -->
    <div class="header-section">
        <div class="row">
            <div class="col-md-6">
                <h5>Datos de la habitación</h5>
                <p><strong>Nombre:</strong> Habitación 101</p>
                <p><strong>Detalles:</strong> Con cama de 2 plazas, una TV, Cable</p>
            </div>
            <div class="col-md-6 text-end">
                <p><strong>Tipo:</strong> Dobles</p>
                <p><strong>Estado:</strong> <span class="badge bg-success">Disponible</span></p>
            </div>
        </div>
    </div>

    <!-- Formulario -->
    <div class="form-section">
        <h5>Datos del Cliente</h5>
        <div class="row">
            <div class="col-md-2">
                <label for="tipoDocumento">Tipo Documento:</label>
                <select id="tipoDocumento" class="form-select">
                    <option>DNI</option>
                    <option>Pasaporte</option>
                    <option>RUC</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="numeroDocumento">N°:</label>
                <input type="text" id="numeroDocumento" class="form-control" value="05298765">
            </div>
            <div class="col-md-4">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" class="form-control" value="José Manuel Ríos Montes">
            </div>
            <div class="col-md-2">
                <label for="email">E-mail:</label>
                <input type="email" id="email" class="form-control" value="jrios@gmail.com">
            </div>
            <div class="col-md-2">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" class="form-control" value="987898767">
            </div>
            <div class="col-md-4">
                <label for="razonSocial">Razón social:</label>
                <input type="text" id="razonSocial" class="form-control" value="Persona Natural">
            </div>
            <div class="col-md-4">
                <label for="procedencia">Procedencia:</label>
                <input type="text" id="procedencia" class="form-control" value="Lima">
            </div>
            <div class="col-md-2">
                <label for="factura">Factura:</label>
                <input type="text" id="factura" class="form-control" value="000">
            </div>
            <div class="col-md-2">
                <label for="folioFactura">Folio de factura:</label>
                <input type="text" id="folioFactura" class="form-control" value="000">
            </div>
            <div class="col-md-4">
                <label for="nota">Nota:</label>
                <input type="text" id="nota" class="form-control" value="Vista al mar">
            </div>
            <div class="col-md-2">
                <label for="toallas">Toallas:</label>
                <input type="number" id="toallas" class="form-control" value="1">
            </div>
        </div>

        <h5 class="mt-4">Datos del Alojamiento</h5>
        <div class="row">
            <div class="col-md-3">
                <label for="tarifa">Tarifa:</label>
                <select id="tarifa" class="form-select">
                    <option>Matrimoniales</option>
                    <option>Individuales</option>
                    <option>Dobles</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" class="form-control" value="75">
            </div>
            <div class="col-md-2">
                <label for="cantidadNoches">Cant. noches:</label>
                <input type="number" id="cantidadNoches" class="form-control" value="1">
            </div>
            <div class="col-md-2">
                <label for="cantidadPersonas">Cant. de personas:</label>
                <input type="number" id="cantidadPersonas" class="form-control" value="2">
            </div>
            <div class="col-md-3">
                <label for="estadoPago">Estado de pago:</label>
                <select id="estadoPago" class="form-select">
                    <option>Falta pagar</option>
                    <option>Pagado</option>
                </select>
            </div>
        </div>

        <div class="total-pagar">
            Total a pagar: 75
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="fechaSalida">Fecha salida:</label>
                <input type="date" id="fechaSalida" class="form-control" value="2020-12-21">
            </div>
            <div class="col-md-6">
                <label for="horaSalida">Hora salida:</label>
                <input type="time" id="horaSalida" class="form-control" value="12:00">
            </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-danger">Cancelar</button>
            <button type="button" class="btn btn-success">Registrar ingreso</button>
        </div>
    </div>
</div>
