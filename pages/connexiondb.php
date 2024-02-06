<?php
try {

    $pdo = new PDO("mysql:host=localhost;dbname=gestion_stag",
        "root", "root1234");

}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());

    //die('Erreur : impossible de se connecter à la base de donnée');
}
?>

