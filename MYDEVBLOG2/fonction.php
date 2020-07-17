<?php
function getArticles()
{
    require('connect.php');
    $req = $bdd->prepare('SELECT id, titre, Date FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

function getArt($id)
{
    require('connect.php');
    $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount()==1)
    {
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    else
        header('Location: index.php');
}