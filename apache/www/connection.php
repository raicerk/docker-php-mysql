<?php
error_reporting(E_ALL);

$sql = new MySQLi("docker-mysql", "my_username", "my_password", "database_name");

if(!$sql){
  echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}
