<?php
include("db.php");
$Nombre = '';
$aPaterno= '';
$aMaterno= '';
$Sueldo= '';
$Telefono= '';
$aeropuerto= '';
$cargo= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_empleado WHERE idEmpleado=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $aPaterno = $row['aPaterno'];
    $aMaterno = $row['aMaterno'];
    $Sueldo = $row['Sueldo'];
    $Telefono = $row['Telefono'];
    $aeropuerto = $row['Aeropuerto'];
    $cargo = $row['Cargo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Nombre = $_POST['NombreEmpleado'];
  $aPaterno = $_POST['ApellidoPaterno'];
  $aMaterno = $_POST['ApellidoMaterno'];
  $sueldo = $_POST['Sueldo'];
  $telefono = $_POST['telefono'];
  $aeropuerto = $_POST['aeropuerto'];
  $cargo = $_POST['cargo'];
  $query = "UPDATE tbl_empleado set Nombre = '$Nombre', aPaterno = '$aPaterno', aMaterno = '$aMaterno', Sueldo = $sueldo, Telefono = '$telefono', Aeropuerto = '$aeropuerto', Cargo = '$cargo' WHERE idEmpleado = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Informacion actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <textarea name="NombreEmpleado" rows="2" class="form-control" placeholder="Nombre del empleado" maxlength="50" required ><?php echo $Nombre;?></textarea>
          </div>
          <div class="form-group">
            <textarea name="ApellidoPaterno" rows="2" class="form-control" placeholder="Apellido paterno" maxlength="50" required><?php echo $aPaterno;?></textarea>
          </div>
          <div class="form-group">
            <textarea name="ApellidoMaterno" rows="2" class="form-control" placeholder="Apellido materno" maxlength="50" required ><?php echo $aMaterno;?></textarea>
          </div>
          <div class="form-group">
            <input type="number" name="Sueldo" class="form-control" placeholder="Sueldo" autofocus maxlength="50" required value="<?php echo $Sueldo; ?>">
          </div>
          <div class="form-group">
            <input type="number " name="telefono" class="form-control" placeholder="Telefono" autofocus maxlength="10" required value="<?php echo $Telefono; ?>">
          </div>
          <div class="form-group">
            <input type="text" name="aeropuerto" class="form-control" placeholder="Aeropuerto" autofocus maxlength="100" required value="<?php echo $aeropuerto; ?>">
          </div>
          <div class="form-group">
            <input type="text" name="cargo" class="form-control" placeholder="Cargo" autofocus maxlength="50" required value="<?php echo $cargo; ?>">
          </div>
          <input type="submit" class="btn-success" name="update" value="Actualizar">
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
