<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-warning">
    <div class="container">
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
    </nav>
<br><br>
    <form action="agregar_cliente" method="post">
        <h1>Clientes nuevos</h1><br>
        <div class="mb-3">
            <label for="txtId" class="form-label">Id del cliente</label>
            <input type="text" id="txtId" name="txtId" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtApellido" class="form-label">Apellido</label>
            <input type="text" id="txtApellido" name="txtApellido" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtNit" class="form-label">NIT</label>
            <input type="text" id="txtNit" name="txtNit" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Telefono</label>
            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo Electronico</label>
            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtDireccion" class="form-label">Dirección</label>
            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtContraseña" class="form-label">Contraseña</label>
            <input type="text" id="txtContraseña" name="txtContraseña" class="form-control">
        </div>
        <div class="mb-8">
            <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
        </div>
    </form>
        
        
    </div>
</body>
</html>