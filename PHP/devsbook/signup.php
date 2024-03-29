<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css" />
</head>
<body>
    <header>
        <div class="container">
            <a href="<?=$base;?>"><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/signup_action.php">

            <?php 
            if(!empty($_SESSION['flash'])) {
                echo $_SESSION['flash'];
                $_SESSION['flash'] = '';
            }
            ?>

            <input placeholder="Full name" class="input" type="text" name="name" />
            
            <input placeholder="Email" class="input" type="email" name="email" />

            <input placeholder="Password" class="input" type="password" name="password" />

            <input placeholder="Birthdate (DD/MM/YYYY)" class="input" type="text" name="birthdate" id="birthdate"/>            

            <input class="button" type="submit" value="Sign up" />

            <a href="<?=$base;?>/login.php">Already registered? Login</a>
        </form>
    </section>

            <script src="https://unpkg.com/imask"></script>
            <script>
                IMask(
                    document.getElementById('birthdate'),
                    {mask:'00/00/0000'}
                );
            </script>

</body>
</html>