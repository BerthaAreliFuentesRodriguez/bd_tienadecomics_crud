<?php

include('db.php');

if (isset($_POST['registrar'])) {
  $nomproveedor = $_POST['nomproveedor'];
    $apellidosprov=$_POST['apellidosprov'];
    $telefono=$_POST['telefono'];
    $emailproveedor=$_POST['emailproveedor'];
    $direccion=$_POST['direccion'];
    $sexo=$_POST['sexo'];
    $tipocomics=$_POST['tipocomics'];
  $query = "INSERT INTO proveedor(nomproveedor, apellidosprov, telefono, emailproveedor, direccion, sexo, tipocomics) 
  VALUES ('$nomproveedor', '$apellidosprov', $telefono, '$emailproveedor','$direccion','$sexo',' $tipocomics')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida");
  }

  $_SESSION['message'] = 'Registro guardado correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
