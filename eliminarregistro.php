<?php

include("db.php");

if(isset($_GET['idproveedor'])) {
  $id = $_GET['idproveedor'];
  $query = "DELETE FROM proveedor WHERE idproveedor = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida");
  }

  $_SESSION['message'] = 'Registro eliminado con exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
