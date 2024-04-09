<?php
    require_once("session.req.php");
    require("header.req.php");
    if (isset($_POST['next'])) {
		foreach ($_POST as $key => $value)
		{
			$_SESSION['info'][$key] = $value;
		}

		$keys = array_keys($_SESSION['info']);

		if (in_array('next', $keys)) {
			unset($_SESSION['info']['next']);
		}
    header("Location: validation.php");
    }
?>


<section>
    <form action="" method="POST">
        <label for="">SIRET</label><br>
        <input type="text" name="siret"><br>
        <label for="">Métier</label><br>
        <input type="text" name="job"><br>
        <input type="submit" name="next" value="Suivant">
    </form>
</section>


<?php
    require("footer.req.php");
?>