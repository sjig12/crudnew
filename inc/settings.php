<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "No puede pasar oiga";
  ?>
  <a href="http://localhost/crud/"> Ir al sitio de login</a>
  <?php
  exit();
}
}

?>