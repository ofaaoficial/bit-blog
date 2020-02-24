<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Bit-Blog</title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/components.css">
</head>
<body>
<nav class="navbar">
    <a href="?controller=index" class="navbar-brand">Bit-Blog</a>
    <ul class="navbar-nav">
        <?php if (!empty($_SESSION['usuario'])): ?>
            <?php if ($_SESSION['usuario']->rol_id == 1): ?>
                <li><a class="nav-link" href="?controller=usuario">Usuarios</a></li>
                <li><a class="nav-link" href="?controller=categoria">Categorias</a></li>
            <?php endif; ?>
            <li><a class="nav-link" href="?controller=publicacion">Publicacion</a></li>
            <li><a class="nav-link" href="?controller=seguridad&method=salir">Cerrar sesion</a></p></li>
        <?php else: ?>
            <li><a class="nav-link" href="?controller=index&method=ingresar">Ingresar</a></li>
            <li><a class="nav-link" href="?controller=index&method=registro">Registrarme</a></li>
        <?php endif; ?>
    </ul>
</nav>
<main class="container">
        -->


        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body class="layout-3" style="overflow-x: hidden;">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Bit-Blog</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
          <?php if (!empty($_SESSION['usuario'])): ?>

            <?php if ($_SESSION['usuario']->rol_id == 1): ?>

            <li class="nav-item active"><a href="?controller=usuario" class="nav-link">Usuarios</a></li>
            <li class="nav-item"><a href="?controller=categoria" class="nav-link">Categorias</a></li>

            <?php endif; ?>
            <li class="nav-item"><a href="?controller=publicacion" class="nav-link">Publicacion</a></li>
            <li class="nav-item"><a href="?controller=seguridad&method=salir" class="nav-link">Cerrar sesion</a></li>

            <?php else: ?>

                <li class="nav-item"><a href="?controller=index&method=ingresar" class="nav-link">Ingresar</a></li>
            <li class="nav-item"><a href="?controller=index&method=registro" class="nav-link">Registrarme</a></li>

                <?php endif; ?>
          </ul>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Buscar..." aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Resultados
              </div>
              <div class="search-item">
                <a href="#">Buenos dias</a>
              </div>
        
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
    
         
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="https://www.biography.com/.image/t_share/MTQzMzAxODc2MTU3MjYxMzgz/emma-watson_gettyimages-619546914jpg.jpg" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo $_SESSION['usuario']->nombres ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Conectado</div>
         

              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesion
              </a>
            </div>
          </li>
        </ul>
      </nav>

   
