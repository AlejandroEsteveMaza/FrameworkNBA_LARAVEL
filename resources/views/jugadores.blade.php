<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/jugadores.css')}}">
</head>

<body>
    @extends('topBar')
    @section('content')

    <?= var_dump($jugadores);?>

    <div class="gallery_container">
        <div id="botones">
            <a href="<?= $config["site"]["root"] . "/jugadores/nuevo" ?>">Añadir</a>
            <a href="<?= $config["site"]["root"] . "/jugadores/actualizar" ?>">Actualizar</a>
            <a href="<?= $config["site"]["root"] . "/jugadores/borrar" ?>">Borrar</a>
        </div>
        <?php

        /* foreach ($data as $key => $value) {
            echo "<div class='gallery'>";
            echo "<a href='" . $config["site"]["root"] . "/jugador/" . $value["codigo"] . "" . "'>";
            echo "<img src='public/images/celticslogo.png'>";
            echo "<div class='desc'>" . $value["Nombre"] . "</div>";
            echo "</a>";
            echo "</div>";
        } */
        ?>
    </div>
    @stop
</body>

</html>