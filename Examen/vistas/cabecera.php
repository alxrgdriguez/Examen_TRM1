<!-- Cabecera -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Ciudades Alejandro Rodriguez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2">Ciudades</a></li>
                <li><a href="index.php?accion=insertarvistaCiudades" class="nav-link px-2">Añadir Ciudad</a></li>
            </ul>

            <form action="index.php" method="POST" id="buscarCiudad" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" name="texarea_busqueda" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button form="buscarCiudad" name="boton_buscarCiudad" type="submit" class="btn btn-warning">Buscar Ciudad</button>
            </div>
        </div>
    </div>
</header>
