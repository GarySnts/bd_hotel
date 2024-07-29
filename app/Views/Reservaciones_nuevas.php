<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-dark text-warning">
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/fs2024/db_telefonica/public/">Raiz</a>
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
    <form action="agregar_reservacion" method="post">
        <h1>Reservación nueva</h1><br>
        <div class="mb-3">
            <label for="txtId" class="form-label">Id de reservación</label>
            <input type="text" id="txtId" name="txtId" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtFecha" class="form-label">Fecha de reservación</label>
            <input type="text" id="txtFecha" name="txtFecha" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtCliente" class="form-label">Id del cliente</label>
            <input type="text" id="txtCliente" name="txtCliente" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtHotel" class="form-label">Id del hotel</label>
            <input type="text" id="txtHotel" name="txtHotel" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtDescripcion" class="form-label">descripción de reservación</label>
            <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtUser" class="form-label">Id del usuario</label>
            <input type="text" id="txtUser" name="txtUser" class="form-control">
        </div>
        <div class="mb-8">
            <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
        </div>
    </form>
        
        
    </div>
</body>
</html>