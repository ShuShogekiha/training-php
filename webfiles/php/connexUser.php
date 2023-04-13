<?php include_once("./head.php"); ?>
<?php include_once("./header.php"); ?>

<main>
    <form action="scriptCo.php" method="post">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="pass" placeholder="Mot de passe" required>
        <input type="submit">
    </form>
</main>

<?php include_once("./footer.php"); ?>