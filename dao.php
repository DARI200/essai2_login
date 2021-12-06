<?php

try {

    $dbConnect = new PDO('mysql:host=localhost;dbname=demo_personne;charset=utf8', 'root', '');
    $dbConnect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $serveur) {
    
    header('Location: erreur.php');
    exit();

}





function getPersonneByLogin($login) {

    global $dbConnect;

    $sql = 'SELECT * FROM personne WHERE nom = \'' . $login . '\'';

    $stat_pers = $dbConnect->query($sql);

    if ($stat_pers->rowCount() == 1) {
        $pers = $stat_pers->fetch(PDO::FETCH_ASSOC);
        return $pers;
 
    }else {
        //return false;
        $err = new Exception('login incorrect');
        throw $err;

    }

};


function getAllArticle() {

    global $dbConnect;

    $sql = 'SELECT * FROM articles';
    $stat_articles = $dbConnect->query($sql);
    $arts = $stat_articles ->fetchAll(PDO::FETCH_ASSOC);

    return $arts;

};




