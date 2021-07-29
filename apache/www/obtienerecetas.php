<?php

@include "connection.php";

$result = $sql->query("SELECT * FROM prueba;");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
echo json_encode($set);
?>