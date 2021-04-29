<?php
    session_start();
 
    const USERNAME = "admin";
    const PASSWORD = "securePassword";

    $_SESSION['logged'] = isset($_SESSION['logged']) ? $_SESSION['logged'] : false;
    $login_error = NULL;

    if (isset($_POST['username'], $_POST['password']))
    {
        if ($_POST['username'] === USERNAME and $_POST['password'] === PASSWORD)
        {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['logged'] = true;
        }
        else
        {
            $login_error = "Bad credentials";
            http_response_code(403);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web App</title>
    </head>
    
    <body>
        <?php if ($_SESSION['logged']) { ?>
            <section>
                <h2>Hello <?php echo $_SESSION['username'].PHP_EOL; ?></h2>
                <br>
                <br>
                <a href="logout.php"><button>Logout</button></a>
            </section>
        <?php }  else { ?>
            <h1>Login page</h1>

            <form method="post" action="index.php">
                <div id="container">
                    <div id="labels">
                        <label for="username" style="margin-bottom: 10px;">Username :</label><br>
                        <label for="password">Password :</label><br>
                    </div>

                    <div id="inputs">
                        <input name="username" type="text" id="username" required><br>
                        <input name="password" type="password" id="password" required><br>
                    </div>
                </div>
                <input type="submit" id="login" value="Login">
            </from>
            <?php if(!is_null($login_error)) {
                echo "<br><br><span id=\"error\">{$login_error}</span>".PHP_EOL;
            } ?>
        <?php } ?>
    </body>

    <style>
        h1 {
            text-align: center;
        }

        section {
            text-align: center;
        }

        form {
            width: 500px;
            margin: auto;
        }

        form #container {
            display: flex;
        }

        form div {
            width: 100%;
        }

        label {
            display: inline-block;
        }

        #container input {
            margin-bottom: 5px;
        }

        #login {
            width: 350px;
        }

        #error {
            color: red;
        }
    </style>
</html>