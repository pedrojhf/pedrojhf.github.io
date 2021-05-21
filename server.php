<?php
session_start();


$summonername = "";
$nombre    = "";

$db = mysqli_connect('localhost:3306', 'root', '', 'soloqchallenge');


if (isset($_POST['reg_user'])) {

  $summonername = mysqli_real_escape_string($db, $_POST['summonername']);
  $nombre = mysqli_real_escape_string($db, $_POST['nombre']);

  $user_check_query = "SELECT * FROM usuarios WHERE summonername='$summonername' OR nombre='$nombre' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);



      $query = "INSERT INTO usuarios(summonername, nombre) VALUES('$summonername', '$nombre')";
      mysqli_query($db, $query);
      header('location: registered.html');

}

?>