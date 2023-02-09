<?php

// Démarrage de la session
session_start();

// Définition de variables de session
$_SESSION['username'] = 'Achille Kouassi';
$_SESSION['email'] = 'patriceachillekouassin@gmail.com';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Variables de session</title>
  </head>
  <body>
    <h3>Les variables de session sont :</h3>
    <p>Nom d'utilisateur : <?php echo $_SESSION['username']; ?></p>
    <p>Adresse e-mail : <?php echo $_SESSION['email']; ?></p>
  </body>
</html>
