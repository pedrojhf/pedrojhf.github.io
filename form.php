<?php include("server.php")?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Soloq</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style/form.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="post" action="server.php">
  <input id="input-1" type="text" placeholder="Nombre de Invocador" required autofocus name="summonername"/>
  <label for="input-1">
    <span class="label-text">Summoner Name</span>
    <span class="nav-dot"></span>
    <div class="signup-button-trigger">Sign Up</div>
  </label>
  <input id="input-2" type="text" placeholder="Nombre Real" required name="nombre"/>
  <label for="input-2">
    <span class="label-text">Name</span>
    <span class="nav-dot"></span>
  </label>
  <button type="submit" target="" name="reg_user">Create Your Account</button>
  <p class="tip">Press Enter</p>
  <div class="signup-button" >Sign Up</div>
</form>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
