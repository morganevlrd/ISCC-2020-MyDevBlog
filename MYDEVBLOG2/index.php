<?php
require_once('fonction.php');

$articles = getArticles();
?>
 
<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Le Blog de Morgane</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Le Blog de Morgane </h1>

        <header classe="topbar">
            <nav>
                <a href="index.php">Accueil</a>
                <a href="article.php">Articles</a>
                <a href="contact.php">Contact</a>
                <a href="connexion.php">Connexion</a>
                <a href="admin.php">Administrateur</a>
            <link rel="stylesheet" href="style.css">
        </header>

        <p>Bienvenue dans mon blog! Moi c'est Morgane, j'ai 22 ans. Grâce à ce blog je vous partagez un petit bout de ma vie, mais surtout ma passion qui est la mode et la beauté. Vous pourrez retrouver pleins d'astuces, des bons plans mais aussi toute l'actualité de ces deux mondes. Bonne lecture les filles !</p>



        <div class="banniere">
            <img src="beaute.jpg">
        </div>
        
        <?php foreach($articles as $article): ?>
            <h2><?= $article->titre ?></h2>
            <time><?= $article->Date ?></time>
            <h5><?= $article->Extrait ?></h5>
            <br /><br />
            <a href="article.php?id=<?= $article->id ?>">Lire la suite</a>

        <?php endforeach; ?>
    </body>

</html>

