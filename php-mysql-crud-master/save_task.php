<?php

include('db.php');

if (isset($_POST['Guardar_empleado'])) {

  $nombre = $_POST['NombreEmpleado'];
  $aPaterno = $_POST['ApellidoPaterno'];
  $aMaterno = $_POST['ApellidoMaterno'];
  $sueldo = $_POST['Sueldo'];
  $phone = $_POST['telefono'];
  $aeropuerto = $_POST['aeropuerto'];
  $cargo = $_POST['cargo'];

  $query = "INSERT INTO tbl_empleado (Nombre, aPaterno, aMaterno, Sueldo, Telefono, Aeropuerto, Cargo ) VALUES ('$nombre', '$aPaterno', '$aMaterno', $sueldo, '$phone', '$aeropuerto', '$cargo' )";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
