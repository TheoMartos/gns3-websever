<?php
    session_start();
 
    if (isset($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = htmlspecialchars($_POST['username']);
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
        <h1>Login page</h1>
        <?php if ($logged) { ?>
            <div>
                Hello <?php echo $_SESSION['username'].PHP_EOL; ?>
            </div>
            <br>
            <br>
            <a href="logout.php"><button>Logout</button></a>
        <?php }  else { ?>
            <form method="post" action="index.php">
                <div id="container">
                    <div id="labels">
                        <label for="username">Username :</label><br>
                        <label for="password">Password :</label><br>
                    </div>

                    <div id="inputs">
                        <input name="username" type="text" id="username"><br>
                        <input name="password" type="password" id="password"><br>
                    </div>
                </div>
                <input type="submit" value="Login">
            </from>
        <?php } ?>
    </body>

    <style>
        h1 {
            text-align: center
        }

        form #container {
            display: flex;
        }

        form div {
            width: 350px;
        }

        #container label, #container input {
            margin-bottom: 5px;
        }
    </style>
</html>