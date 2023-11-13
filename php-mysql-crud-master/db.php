<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'db_volaris'
) or die(mysqli_erro($mysqli));

?>
