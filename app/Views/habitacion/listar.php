<style>
    .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 10px;
    justify-content: center;
    margin-top: 20px;
    }

    .habitacion-card {
        color: white;
        border-radius: 10px;
        padding: 10px;
        position: relative;
        text-align: center;
    }

    .habitacion-card.disponible {
        background-color: #28a745;
    }

    .habitacion-card.ocupado {
        background-color: #dc3545;
    }

    .habitacion-card.limpieza {
        background-color: #17a2b8;
    }

    .habitacion-card.mantenimiento {
        background-color: #ffc107;
        color: black;
    }

    .habitacion-card h3 {
        font-size: 1.2em;
        margin: 10px 0;
    }

    .habitacion-card p {
        font-size: 0.9em;
        margin: 5px 0;
    }

    .habitacion-card .icon {
        font-size: 1.5em;
        margin: 10px 0;
    }

    .habitacion-card a {
        color: inherit;
        text-decoration: none;
        position: absolute;
        bottom: 10px;
        right: 10px;
    }

    .estado-container {
        display: flex;
        gap: 20px;
    }

    .estado-item {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px 10px;
        font-size: 14px;
        color: #333;
    }

    .estado-item i {
        margin-right: 5px;
    }

    .estado-item.mantenimiento {
        color: #ffa500;
        border-color: #ffa500;
    }

    .estado-item.disponible {
        color: #28a745;
        border-color: #28a745;
    }

    .estado-item.limpieza {
        color: #17a2b8;
        border-color: #17a2b8;
    }

    .estado-item.ocupado {
        color: #dc3545;
        border-color: #dc3545;
    }

</style>



<div class="container-fluid">
    <h2>Listado de habitaciones</h2>
    
    <!-- Estado de habitaciones -->
    <div class="estado-container">
        <div class="estado-item disponible">
            <i class="fas fa-check-circle"></i>
            Disponible
        </div>
        <div class="estado-item limpieza">
            <i class="fas fa-broom"></i>
            Limpieza
        </div>
        <div class="estado-item ocupado">
            <i class="fas fa-times-circle"></i>
            Ocupado
        </div>
        <div class="estado-item mantenimiento">
            <i class="fas fa-tools"></i>
            Mantenimiento
        </div>
    </div>
    
    <!-- Tarjetas de habitaciones -->
    <div class="grid-container">
        <?php 
        $estados = [
            1 => ['class' => 'disponible', 'texto' => 'Disponible'],
            2 => ['class' => 'ocupado', 'texto' => 'Ocupado'],
            3 => ['class' => 'limpieza', 'texto' => 'Limpieza'],
            4 => ['class' => 'mantenimiento', 'texto' => 'Mantenimiento'],
        ];
        
        foreach ($habitaciones as $habitacion): 
            $estado = $estados[$habitacion['estado']] ?? ['class' => 'desconocido', 'texto' => 'Desconocido'];
        ?>
            <div class="habitacion-card <?php echo $estado['class']; ?>">
                <h3>Habitación <?php echo $habitacion['numero']; ?></h3>
                <h3> <?php echo $habitacion['categoria']; ?></h3>
                <p><?php echo $estado['texto']; ?></p>
                <i class="fas fa-bed icon"></i>
                <a href="<?php echo base_url('habitacion/estancia/'.$habitacion['id']); ?>">
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
