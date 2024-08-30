<?php
$serverdb = "localhost";
$database = "redsocial";
// redsocial
// codelohubper
// id21279139_codelohubper

$userdb = "root";
// root
// id21279139_codelohubper

$passdb = "caa356e963c26620f996c133eb90e8df";
// Mayo312005_@
// caa356e963c26620f996c133eb90e8df

$conn = new mysqli($serverdb, $userdb, $passdb, $database);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  echo "Errores de conexión: " . $conn->connect_error;
}
?>