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
    unset($_SESSION);

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>