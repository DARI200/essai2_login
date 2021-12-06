<?php
require 'dao.php';
session_start();
$page = 'login';
$erreur = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = $_POST['login'];

    try {
        $personne = getPersonneByLogin($login);
  
        $_SESSION['user'] = $personne['nom'];
        header('Location: index.php');

        exit();
            
         
    } catch (Exception $e) {
        $erreur = $e->getMessage();
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include 'inc/entete.php';
    ?>
    <section>
        <h3>Identifiez vous</h3>
        <form method="post" action="login.php">
            <?php
                if ($erreur != '') {
                    echo '<h5>'.$erreur.'</h5>';
                }
            ?>
            <label>Votre login </label>
            <input type="text" name="login">
            <button type="submit">Valider</button>
        </form>
    </section>
</body>

</html>
