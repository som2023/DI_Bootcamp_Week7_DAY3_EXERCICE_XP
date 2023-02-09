<?php

if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  setcookie("username", $username);
  
}

if(isset($_COOKIE['username'])) {
  echo "Bonjour, " . $_COOKIE['username'];
} else {
  echo "Vous n'êtes pas connecté.";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Connexion</title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Nom d'utilisateur">
      <input type="submit" name="submit" value="Connexion">
    </form>
  </body>
</html>
