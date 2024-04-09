<?php
    require_once("session.req.php");
    require("header.req.php");
    header("Location: step2.php");
?>


    <form action="" method="POST">
        <label for="">Nom</label><br>
        <input type="text" name="nom"><br>
        <label for="">Prénom</label><br>
        <input type="text" name="prenom"><br>
        <input type="submit" name="next" value="Suivant">
    </form>


<?php
    require("footer.req.php");
?>