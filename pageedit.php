<?php include_once("./webfiles/php/head.php"); 
include_once("./webfiles/php/header.php"); 

$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

if (!empty($dbh)) {
    $id = $_POST["id"];
}
?>



<main>
    <form action="./webfiles/php/edit.php" method="POST">
        <input type="text" name="desi" placeholder="nom a modifier">
        <input type="text" name="price" placeholder="prix a modifier">
        <input type="url" name="link" placeholder="lien d'image a modifier">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit">
    </form>
</main>


<?php include_once("./webfiles/php/footer.php"); ?>