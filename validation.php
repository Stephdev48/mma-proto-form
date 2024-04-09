<?php
    require_once("session.req.php");
    require("header.req.php");
?>


<p class="validate">Validé !</p>

<?php
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>


<?php
    require("footer.req.php");
    unset($_SESSION['info']['siret']);

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    echo "<pre>";
    var_dump($id_session);
    echo "</pre>";

    echo "<pre>";
    var_dump($_COOKIE['PHPSESSID']);
    echo "</pre>";

    session_unset();

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    echo "<pre>";
    var_dump($id_session);
    echo "</pre>";
?>