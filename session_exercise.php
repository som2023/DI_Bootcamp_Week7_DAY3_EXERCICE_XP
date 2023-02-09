<?php
session_start();
$_SESSION['username'] = 'SOM';
if (isset($_POST['btn_submit'])) {
    $username = trim($_POST['username']);
    if ($username == $_SESSION['username']) {
        echo 'Welcome ' . $username;
    } else {
        echo "Invalid";
    }
if(isset($_POST['btn_decon'])){       
session_start();
session_destroy();
exit;
}
    
}
?>
<!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>EXERCICE_XP_1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
 </head>
 <body>
   <form action="session_exercise.php" method="post">
    <div class="name">
        <label for="">Name</label><input type="text" name="username" placeholder="Please enter your name" />
        <button type="submit" name="btn_submit">Submit</button>
        <button type="submit" name="btn_decon"> Deconnexion</button>
    </div>
 </form>
 </body>
 </html>