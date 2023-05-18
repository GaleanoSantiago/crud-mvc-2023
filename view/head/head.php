<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo (empty($_GET["id"])) 
        ? ((strpos($_SERVER["REQUEST_URI"],"create")) ? "Crear Usuario" : "Inicio")
        : ((strpos($_SERVER["REQUEST_URI"],"show")) ? "Detalles del Registro ".$_GET["id"] : "Actualizar Registro ".$_GET["id"]);
        // echo $_SERVER["REQUEST_URI"];
        ?>
    </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Php/crud-mvc-2023/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Php/crud-mvc-2023/view/username/index.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Php/crud-mvc-2023/view/username/create.php">Nuevo Usuario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">

