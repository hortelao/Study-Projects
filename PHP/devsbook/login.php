<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
    <link rel="icon" href="<?=$base;?>/media/php.ico" type="image/x-icon"/>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?=$base;?>"><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/login_action.php">

            <?php 
            if(!empty($_SESSION['flash'])) {
                echo $_SESSION['flash'];
                $_SESSION['flash'] = '';
            }
            ?>

            <input placeholder="Enter your e-mail" class="input" type="email" name="email" />

            <input placeholder="Enter your password" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Login" />

            <a href="<?=$base;?>/signup.php">Sign up!</a><br/>
            <br/><hr/></br>For testing purposes you can use the following user to login:<br/>
            Email: <strong>testuser@test.com</strong> <br/>
            Password: <strong>1234</strong> <br/>
            Or, you can create an account.
        </form>

    </section>
</body>
</html>