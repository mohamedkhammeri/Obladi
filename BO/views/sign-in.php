<?php

session_start();

//controle
if (isset($_POST['login'])) {

  $login=trim($_POST['login']);
  $mdp=$_POST['mdp'];

  if ($login=="admin" && $mdp=="admin") {
    $_SESSION['signOn']=$login;
    header('location: ./');
  }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="login" value="">
      <input type="password" name="mdp" value="">
      <input type="submit" value="Login">
    </form>
  </body>
</html>
