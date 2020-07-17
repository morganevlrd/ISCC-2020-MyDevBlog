<!DOCTYPE html>
    <html land="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
<body>
<main>
        <h3>CONTACT</h3>
        <link rel="stylesheet" href="style.css">

        <em> N'hesitez pas à me laisser un message. Vous pouvez me donner des idées de sujet à traiter où bien des axes d'amelioration</em>

<p><form action="index.php?page=contact-form" method="post">
       <div>
            <label for="name/firstname">Nom/Prenom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
             <label for="mail">e-mail:</label>
             <input type="email" id="mail" name="user_mail">
        </div>
        <div>
             <label for="msg">message :</label>
             <textarea name="user_message" id="msg" ></textarea>
        </div>
        <input type="submit" value="envoyer" />
    </form></p>

</main>
</body>
</html>