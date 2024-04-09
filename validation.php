<?php
    require_once("session.req.php");
    require("header.req.php");
?>


<p>Validé !</p>

<?php
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>


<?php
    require("footer.req.php");
?>