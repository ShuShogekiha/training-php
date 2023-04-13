<?php include_once("./webfiles/php/head.php"); ?>
<?php include_once("./webfiles/php/header.php"); ?>

<main>
    <form action="./webfiles/php/ajout.php" method="POST">
        <input type="text" name="desi" placeholder="nom de l'article">
        <input type="text" name="price" placeholder="prix de l'article">
        <input type="url" name="link" placeholder="lien d'image de l'article">
        <input type="submit">
    </form>
</main>


<?php include_once("./webfiles/php/footer.php"); ?>