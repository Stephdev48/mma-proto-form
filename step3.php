<?php
    require_once("session.req.php");
    require("header.req.php");
    if (isset($_POST['next'])) {
		foreach ($_POST as $key => $value)
		{
			$_SESSION['info-'.$_POST['fields']][$key] = $value;
		}

		$keys = array_keys($_SESSION['info-'.$_POST['fields']]);

		if (in_array('next', $keys)) {
			unset($_SESSION['info-'.$_POST['fields']]['next']);
		}
    header("Location: validation.php");
    }
?>


<section>
    <form action="" method="POST">
        <label for="">SIRET</label><br>
        <input type="number" name="siret" max="99999999999999"><br>
        <label for="">Métier</label><br>
        <input type="text" name="job"><br>
        <input type="hidden" name="fields" value="enterprise">
        <input type="submit" name="next" value="Validation">
    </form>
</section>


<?php
    require("footer.req.php");
?>