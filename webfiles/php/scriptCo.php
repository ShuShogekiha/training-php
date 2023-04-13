<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

if (!empty($dbh)) {

    $passCo = $_POST["pass"];
    $mailCo = $_POST["email"];
    

    $roquete = "SELECT user FROM utilisateurs WHERE mail = '$mailCo'";
    $requete = "SELECT user FROM utilisateurs WHERE password = '$passCo'";
    $exec = $dbh->query($requete);
    $execu = $dbh->query($roquete);
    $test = $exec->fetchAll(PDO::FETCH_ASSOC);
    $testo = $execu->fetchAll(PDO::FETCH_ASSOC);

    if($test && $testo){
        if($test === $testo){
            echo "l'utilisateur est ",$test[0]["user"];
        }
    }
}
?>