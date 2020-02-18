<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bit-Blog</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">Bit-Blog</a>
        <ul class="navbar-nav">
            <?php if(!empty($_SESSION['usuario'])): ?>
                <li><a class="nav-link" href="?controller=usuario">Usuarios</a></li>
                <li><a class="nav-link" href="?controller=categoria">Categorias</a></li>
                <li><a class="nav-link" href="?controller=publicacion">Publicacion</a></li>
                <li><a class="nav-link" href="?controller=seguridad&method=salir">Cerrar sesion</a></p></li>
            <?php else: ?>
                <li><a class="nav-link" href="?controller=index&method=ingresar">Ingresar</a></li>
                <li><a class="nav-link" href="?controller=index&method=registro">Registrarme</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <main class="container">

