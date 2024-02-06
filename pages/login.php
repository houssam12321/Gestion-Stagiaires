<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>
<! DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf-8">
    <title>Se connecter</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    <link rel="icon" href="photo.png" type="image/x-icon" >
    
</head>
<style>
   .lien{
    
        position: absolute;
        top: 10px;
        right: 10px;
    
   }
   .image-top-left{
    position: absolute; /* Position absolue par rapport à la page */
    top: 0; /* Position en haut de la page */
    left: 0;
    width: 3cm;
    height: 3.7cm;

    
    
    }
    body{
        color: black;
        background: linear-gradient(white,#40abe6);
    }
    

    .panel {
        width: 100%;
        max-width: 1400px; /* Ajustez cette valeur selon vos besoins */
    }
    .texte {
        size: 15cm;
        text-align: center; /* Centre le texte horizontalement */
        position: absolute;
        top: 30px; /* Position en haut de la page avec une marge de 10px depuis le haut */
        left: 0;
        right: 0;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .log{
        width: 15cm;
        height: 15cm;
        margin: 0 auto; /* Margin automatique à gauche et à droite */
        margin-top: 4cm;
    
    }
    
</style>
<body>
    <div class="lien">
        <a href="https://collectivites-territoriales.gov.ma/">Visiter notre site !</a>
    </div>
    <img src="photo.png" class="image-top-left">
    <div class="texte">
    <p>La plateforme de gestion des stagiaires . </p>
    </div>
<div class="log">
    <div class="panel panel-primary margetop60">
        <div class="panel-heading">Se connecter :</div>
        <div class="panel-body">
            <form method="post" action="seConnecter.php" class="form">

                <?php if (!empty($erreurLogin)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $erreurLogin ?>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <label for="login">Login :</label>
                    <input type="text" name="login" placeholder="Login"
                           class="form-control" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" name="pwd"
                           placeholder="Mot de passe" class="form-control"/>
                </div>

                <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-log-in"></span>
                    Se connecter
                </button>
                <p class="text-right">
                    <a href="InitialiserPwd.php">Mot de passe Oublié</a>

                    &nbsp &nbsp

                    <a href="nouvelUtilisateur.php">Créer un compte</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</HTML>
