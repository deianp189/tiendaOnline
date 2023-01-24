    <?php 

    $ventas = ControladorVentas::ctrMostrarTotalVentas();

    $visitas = ControladorVisitas::ctrMostrarTotalVisitas();

    $usuarios = ControladorUsuarios::ctrMostrarTotalUsuarios("id");

    $totalUsuarios = count($usuarios);


    $productos = ControladorProductos::ctrMostrarTotalProductos("id");

    $totalProductos = count($productos);


    
    
    
    ?>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">

                <h3>$<?php echo number_format($ventas["total"]); ?></h3>

                <p>ventas</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">

                <h3><?php echo number_format($visitas["total"]); ?></h3>

                <p>visitas</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">mas info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo number_format($totalUsuarios); ?></h3>

                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">mas info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?php echo number_format($totalProductos); ?></h3>

                <p>productos</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->