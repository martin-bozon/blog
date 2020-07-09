<?php 
    include 'php/traitement/php_inscription.php';
    require 'php/fonction/fonctions.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="src/fontello/css/fontello.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css"/> 
    <link href="src/css/styles.css" rel="stylesheet">  
    <title>Inscription</title>
</head>
<body>
    <header><?php include 'php/include/header.php';?></header>

    <main>              
        <h1>Formulaire d'inscription</h1>
        <form action="" method="POST">
            <label for="login">Login :</label>
            <input type="text" name="login" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>

            <label for="conf_password">Confirmer mot de passe :</label>
            <input type="password" name="conf_password" required>

            <label for="email">email :</label>
            <input type="email" name="email" required>

            <input type="submit" name="valid_insc" value="Inscription">

            <?php
                if(isset($msg_error))
                    {
            ?>
                        <p class="msg_error">
            <?php
                        echo $msg_error;
            ?>
                        </p>
            <?php
                    }
            ?>
        </form>
    </main>

    <?php include 'php/include/footer.php';?>
</body>
</html>