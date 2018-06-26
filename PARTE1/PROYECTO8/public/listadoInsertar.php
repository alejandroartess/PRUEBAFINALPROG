<?php
require_once __DIR__.'/../vendor/autoload.php';
use florida\models\Crud_database;
use florida\models\User;
if(!isset($_POST["nombre"])){
  include_once '../src/views/insertarUsuario.html';
}else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion de equipos</title>
    <link rel="stylesheet"  href="css/formulario.css">
  </head>
  <body>
  <h1>Listado de equipos</h1>
    <div class="actions"><a href="listadoInsertar.php">Insertar Equipo</a></div>
    <div class="actions"><a href="index.php">Lista equipos</a></div>
    <?php
          $user = new User($_POST['nombre'],$_POST['participantes']);
          $crudDB_object= new Crud_database();

          $resultado=$crudDB_object->insertUser($user);

         foreach ($resultado as $fila) {
           echo "</br>";
           echo "<div class='card'>";
           echo "<strong>Usuario</strong> ".$fila['id']."<br>"."<strong>Nombre: </strong>".$fila['nombre']."<br>"."<strong>Participantes: </strong>".$fila['participantes'];
           echo "</div>";
          }
     ?>
  </body>
</html>
<?php 
  }
?>
