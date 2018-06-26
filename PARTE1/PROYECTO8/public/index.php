<?php
require_once __DIR__.'/../vendor/autoload.php';
use florida\models\Crud_database;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="css/formulario.css">
    <title>Gestion de equipos</title>
  </head>
  <body>
  <h1>Listado de equipos</h1>
    <div class="actions"><a href="listadoInsertar.php">Insertar Equipo</a></div>
    <?php
    $gestor= new Crud_database();
    $resultado = $gestor->getAllUsers();
     foreach ($resultado as $fila) {
        echo "</br>";
        echo "<div class='card'>";
        echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Participantes: </strong>".$fila['participantes'];
        echo "</div>";
      }
     ?>
  </body>
</html>
