<?php
include("db.php");
    /*$nomproveedor = '';
    $apellidosprov='';
    $telefono='';
    $emailproveedor='';
    $direccion='';
    $sexo='';
    $tipocomics='';*/

if  (isset($_GET['idproveedor'])) {
  $idproveedor = $_GET['idproveedor'];
  $query = "SELECT * FROM proveedor WHERE idproveedor=$idproveedor";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $idproveedor=$row['idproveedor'];
    $nomproveedor = $row['nomproveedor'];
    $apellidosprov=$row['apellidosprov'];
    $telefono=$row['telefono'];
    $emailproveedor=$row['emailproveedor'];
    $direccion=$row['direccion'];
    $sexo=$row['sexo'];
    $tipocomics=$row['tipocomics'];

  }
}

if (isset($_POST['editar'])) {
  $idproveedor=$_GET['idproveedor'];
    $nomproveedor = $_POST['nomproveedor'];
    $apellidosprov=$_POST['apellidosprov'];
    $telefono=$_POST['telefono'];
    $emailproveedor=$_POST['emailproveedor'];
    $direccion=$_POST['direccion'];
    $sexo=$_POST['sexo'];
    $tipocomics=$_POST['tipocomics'];

  $query = "UPDATE proveedor set nomproveedor = '$nomproveedor', apellidosprov = '$apellidosprov', 
  apellidosprov = '$apellidosprov', telefono='$telefono',emailproveedor='$emailproveedor',
  direccion='$direccion',sexo='$sexo', tipocomics='$tipocomics' WHERE idproveedor=$idproveedor";
  mysqli_query($conn, $query);

  $_SESSION['message'] = 'Registro editado exitoso';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?idproveedor=<?php echo $_GET['idproveedor']; ?>" method="POST">
        <div class="form-group">
          <input name="nomproveedor" type="text" class="form-control" value="<?php echo $nomproveedor; ?>" placeholder="nombre(s)">
        </div>
        <div class="form-group">
          <input name="apellidosprov" type="text" class="form-control" value="<?php echo $apellidosprov; ?>" placeholder="apellido(s)">
        </div>
        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="telefono">
        </div>
        <div class="form-group">
          <input name="emailproveedor" type="text" class="form-control" value="<?php echo $emailproveedor; ?>" placeholder="correo electronico">
        </div>
        <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="direccion">
        </div>
        <div class="form-group">
          <input name="sexo" type="text" class="form-control" value="<?php echo $sexo; ?>" placeholder="sexo">
        </div>
        <div class="form-group">
          <input name="tipocomics" type="text" class="form-control" value="<?php echo $tipocomics; ?>" placeholder="tipo de comics">
        </div>
        <button class="btn-success" name="editar">
          Editar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
