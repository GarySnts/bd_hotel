<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles</title>
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
    <form action="<?=base_url('modificar_hotel')?>" method="post">
        <h1>Modificar hotel</h1><br>
        <div class="mb-3">
            <label for="txtId" class="form-label">Id del hotel</label>
            <input type="text" id="txtId" name="txtId" class="form-control" value="<?=$datos['hotel_id'];?>" placeholder="Ingresar Id del hotel" readonly>
        </div>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?=$datos['nombre'];?>" placeholder="INgresar nombre del hotel">
        </div>
        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo electronico</label>
            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" value="<?=$datos['correoelectronico'];?>" placeholder="Ingresar correo electronico de hotel">
        </div>
        <div class="mb-3">
            <label for="txtTel" class="form-label">Teléfono</label>
            <input type="text" id="txtTel" name="txtTel" class="form-control" value="<?=$datos['telefono'];?>" placeholder="Ingresar teléfono">
        </div>
        <div class="mb-3">
            <label for="txtDireccion" class="form-label">Dirección</label>
            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" value="<?=$datos['direccion'];?>" placeholder="Ingresar dirección de hotel">
        </div>
        <div class="mb-3">
            <label for="txtCiudad" class="form-label">Id de la ciudad</label>
            <input type="text" id="txtCiudad" name="txtCiudad" class="form-control" value="<?=$datos['ciudad_id'];?>" placeholder="Ingresar ciudad del hotel">
        </div>
        <div class="mb-3">
            <label for="txtCategoria" class="form-label">Id de categoria</label>
            <input type="text" id="txtCategoria" name="txtCategoria" class="form-control" value="<?=$datos['categoria_id'];?>" placeholder="Ingresar la categoria">
        </div>
        <div class="mb-3">
            <label for="txtUser" class="form-label">Id de usuario</label>
            <input type="text" id="txtUser" name="txtUser" class="form-control" value="<?=$datos['usuario_id'];?>" placeholder="Ingrese id de usuario">
        </div>
        <div class="mb-8">
            <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
        </div>
    </form>
        
        
    </div>
</body>
</html>