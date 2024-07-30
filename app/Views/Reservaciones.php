<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/fs2024/bd_hotel/public/">Raiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/bd_hotel/public/ver_clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/bd_hotel/public/ver_hoteles">Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/bd_hotel/public/ver_reservaciones">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>
    <a href="nueva_reservacion" class="btn btn-primary">Agregar nueva reservación</a>
    <br><br>
    <h1>Reservaciones</h1>
    <br>
    <table class="table table-border table-success">
        <thead>
            <tr>
                <th>Reservación Id</th>
                <th>Fecha</th>
                <th>Cliente Id</th>
                <th>Hotel Id</th>
                <th>Descripción</th>
                <th>Usuario Id</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($datos as $reservaciones):
            ?>
            <tr>
                <td><?php echo $reservaciones['reservacion_id'];?></td>
                <td><?php echo $reservaciones['fecha'];?></td>
                <td><?php echo $reservaciones['cliente_id'];?></td>
                <td><?php echo $reservaciones['hotel_id'];?></td>
                <td><?php echo $reservaciones['descripcion'];?></td>
                <td><?php echo $reservaciones['usuario_id'];?></td>
                <td>
                <a href="<?=base_url('buscar_reservacion/') . $reservaciones['reservacion_id'];?>" class="btn btn-warning">Modificar</a>
                <a href="<?=base_url('eliminar_reservacion/') . $reservaciones['reservacion_id'];?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>

    </table>


</body>

</html>