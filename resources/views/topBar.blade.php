<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/topBar.css')}}">
</head>

<body>

  <?php
  global $config;
  ?>

  <div class="topnav" id="top">
    <a class="btn" href="<?= $config["site"]["root"] . "/" ?>"> Inicio </a>
    <a class="btn" href="<?= $config["site"]["root"] . "/equipo" ?>">Equipo</a>
    <a class="btn" href="<?= $config["site"]["root"] . "/jugadores" ?>">Jugadores</a>


    <a href="<?= $config['site']['root'] . "/login" ?>" class="topnav--right">Inicia Sesión</a>
    <a class="active" href="<?= $config['site']['root'] . "/registro" ?>">Registrate</a>

  </div>
  @yield('content')
</body>

</html>