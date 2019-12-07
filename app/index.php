<?php
    session_start();
 
    if (isset($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
    }

    $logged = isset($_SESSION['username']) ? true : false;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker</title>
    </head>
    
    <body>
        <h1>Hello from Docker !</h1>
        <?php if ($logged) { ?>
            <div>
                Hello <?php echo $_SESSION['username'].PHP_EOL; ?>
            </div>
        <?php }  else { ?>
            <form method="post" action="index.php">
                <label for="username">Nom d'utilisateur :</label>
                <input name="username" type="text" id="username"><br>
                <label for="password">Mot de passe :</label>
                <input name="password" type="password" id="password"><br>
                <input type="submit" value="Connexion">
            <from>
        <?php } ?>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>