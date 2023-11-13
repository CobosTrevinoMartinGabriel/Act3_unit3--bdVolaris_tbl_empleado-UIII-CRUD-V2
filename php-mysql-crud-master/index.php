<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
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
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <textarea name="NombreEmpleado" rows="2" class="form-control" placeholder="Nombre del empleado" maxlength="50" required></textarea>
          </div>
          <div class="form-group">
            <textarea name="ApellidoPaterno" rows="2" class="form-control" placeholder="Apellido paterno" maxlength="50" required></textarea>
          </div>
          <div class="form-group">
            <textarea name="ApellidoMaterno" rows="2" class="form-control" placeholder="Apellido materno" maxlength="50" required></textarea>
          </div>
          <div class="form-group">
            <input type="number" name="Sueldo" class="form-control" placeholder="Sueldo" autofocus maxlength="50" required>
          </div>
          <div class="form-group">
            <input type="number " name="telefono" class="form-control" placeholder="Telefono" autofocus maxlength="10" required>
          </div>
          <div class="form-group">
            <input type="text" name="aeropuerto" class="form-control" placeholder="Aeropuerto" autofocus maxlength="100" required>
          </div>
          <div class="form-group">
            <input type="text" name="cargo" class="form-control" placeholder="Cargo" autofocus maxlength="50" required>
          </div>
          <input type="submit" name="Guardar_empleado" class="btn btn-success btn-block" value="Guardar empleado">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id de empleado</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Sueldo</th>
            <th>Telefono</th>
            <th>Aeropuerto</th>
            <th>Cargo</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_empleado";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idEmpleado']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['aPaterno']; ?></td>
            <td><?php echo $row['aMaterno']; ?></td>
            <td>$<?php echo $row['Sueldo']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Aeropuerto']; ?></td>
            <td><?php echo $row['Cargo']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['idEmpleado']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['idEmpleado']?>" class="btn btn-danger">
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
