<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container-fluid p-2">
  <div class="row">
    <div class="col-md-3">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="registrar.php" method="POST">
          <div class="form-group">
            <input type="text" name="nomproveedor" class="form-control" placeholder="nombre(s)" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apellidosprov" class="form-control" placeholder="apellido(s)" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="numero de telefono celular" autofocus>
          </div>
          <div class="form-group">
            <input type="email" name="emailproveedor" class="form-control" placeholder="correo electronico" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="direccion" class="form-control" placeholder="direccion" autofocus>
          </div>
          <div class="form-group">
        <label>Masculino
          <input name="sexo" type="radio" value="Masculino" />
          </label>
          <label>Femenino
          <input name="sexo" type="radio" value="Femenino" />
          </label>
      </div>
          <div class="form-group">
            <input type="text" name="tipocomics" class="form-control" placeholder="tipo de comics que provee" autofocus>
          </div>
          <input type="submit" name="registrar" class="btn btn-success btn-block" value="registrar">
        </form>
      </div>
    </div>
    <div class="col-md-9">
      <table class="table table-bordered table-sm" whith='900px'>
        <thead>
          <tr>
            <th>ID Proveedor</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Sexo</th>
            <th>Tipo de comics</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM proveedor";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idproveedor']; ?></td>
            <td><?php echo $row['nomproveedor']; ?></td>
            <td><?php echo $row['apellidosprov']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['emailproveedor']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
            <td><?php echo $row['tipocomics']; ?></td>
            <td>
              <a href="editar.php?idproveedor=<?php echo $row['idproveedor']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminarregistro.php?idproveedor=<?php echo $row['idproveedor']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
              
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
