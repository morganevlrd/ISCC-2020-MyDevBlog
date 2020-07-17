<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
   header('Location: index.php');
else
{
    extract($_GET);
    $id = strip_tags($id);

    require_once('fonction.php');

    $article = getArt($id);
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta  charset="utf-8" />
        <title><?= $article->titre ?></title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <a href="index.php">Retour aux articles</a>
        <h1><?= $article->Titre ?></h1>
        <time><?= $article->Date ?></time>
        <p><?= $article->Auteur ?></p>
        <img><?= $article->Image ?></img>
        <p><?= $article->Texte ?></p> 
        <hr />
    </body>
</html>
