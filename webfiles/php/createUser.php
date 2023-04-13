<?php include_once("./head.php"); ?>
<?php include_once("./header.php"); ?>

<main>
    <form action="./ajout.php" method="post">
        <input type="email" name="mail" placeholder="E-mail" required>
        <input type="text" name="userName" placeholder="Nom d'utilisateur" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <input type="submit">
    </form>
</main>

<?php include_once("./footer.php"); ?>