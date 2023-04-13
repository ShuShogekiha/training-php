<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

if (!empty($dbh)) {

    if($_POST["desi"]){
        $nomArt = $_POST["desi"];
        $prixArt = $_POST['price'];
        $ulrArt = $_POST['link'];
    
        $requete = "INSERT INTO article (designation, img, prix)
        VALUES ('$nomArt', '$ulrArt', $prixArt);";
        $exec = $dbh->query($requete);
        $test = $exec->fetchAll(PDO::FETCH_ASSOC);
    
       header("location: ../../index.php");

    }else{
        $mailUser = $_POST["mail"];
        $userUser = $_POST['userName'];
        $passUser = $_POST['mdp'];
    
        $requete = "INSERT INTO utilisateurs (mail, user, password)
        VALUES ('$mailUser', '$userUser', '$passUser');";
        $exec = $dbh->query($requete);
        $test = $exec->fetchAll(PDO::FETCH_ASSOC);
    
       header("location: ../../index.php");

    }

}
else{
    echo "connexion echoué";
}?>