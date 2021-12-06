<?php
    require 'dao.php';
    $page = 'liste_article';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td, th {
            border: 1px black solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
        include 'inc/entete.php';
    ?>
    <section>
        <h3>Lite des articles</h3>
        <br>
        <table>
            <tr>
                <th>code article</th>
                <th>libellé</th>
                <th>prix unitaire</th>
            </tr>
            <?php

                $articles = getAllArticle();

                foreach($articles as $article) {

                   // var_dump($article);
                   // echo '<br>';

                   echo '<tr>';
                   echo '<td>'.$article['id_art'].'</td>';
                   echo '<td>'.$article['libelle_art'].'</td>';
                   echo '<td>'.$article['prix_art'].'</td>';
                   echo '</tr>';
                }

            ?>

        </table>
    </section>
</body>

</html>