<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
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
    <a href="nuevo_hotel" class="btn btn-primary">Agregar nuevo hotel</a>
    <br><br>
    <h1>Hoteles</h1>
    <br>
    <table class="table table-border table-success">
        <thead>
            <tr>
                <th>Hotel Id</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>ciudad_id</th>
                <th>categoria_id</th>
                <th>usuario_id</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($datos as $hoteles):
            ?>
            <tr>
                <td><?php echo $hoteles['hotel_id'];?></td>
                <td><?php echo $hoteles['nombre'];?></td>
                <td><?php echo $hoteles['correoelectronico'];?></td>
                <td><?php echo $hoteles['telefono'];?></td>
                <td><?php echo $hoteles['direccion'];?></td>
                <td><?php echo $hoteles['ciudad_id'];?></td>
                <td><?php echo $hoteles['categoria_id'];?></td>
                <td><?php echo $hoteles['usuario_id'];?></td>

                <td>
                <a href="<?=base_url('buscar_hotel/') . $hoteles['hotel_id'];?>" class="btn btn-warning">Modificar</a>
                <a href="<?=base_url('eliminar_hotel/') . $hoteles['hotel_id'];?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>

    </table>


</body>

</html>