<?php
$dbh = new PDO("mysql:host=localhost;dbname=amazoone", "root", "");

if (!empty($dbh)) {



    $requete = "SELECT * FROM article";
    $exec = $dbh->query($requete);
    $test = $exec->fetchAll(PDO::FETCH_ASSOC);

    foreach ($test as $tuple) {
        ?>
            <div class="card">
                <form action="./webfiles/php/delete.php" method="post">
                    <input type="hidden" value="<?php echo $tuple["id"]?>" name="id">
                    <input type="submit" value="X">
                </form>
                <img src="<?php echo $tuple["img"]?>" alt="illustration de <?php echo $tuple["designation"]?>">
                <p class="info"><?php echo $tuple["prix"]?>€&nbsp;-&nbsp;Vente flash</p>
                <p class="product"><?php echo $tuple["designation"]?></p>
                <form action="./pageedit.php" method="post">
                    <input type="hidden" value="<?php echo $tuple["id"]?>" name="id">
                    <input type="submit" value="modifier">
                </form>
            </div>
        <?php
    }
}
?>