<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM tbl_empleado WHERE idEmpleado = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = "Empleado borrado exitosamente";
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
