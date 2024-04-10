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

		header("Location: step3.php");
    }
?>


<section>
    <form action="" method="POST">
        <label for="">Téléphone</label><br>
        <input type="number" name="phone" max="9999999999"><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <input type="hidden" name="fields" value="souscripteur">
        <input type="submit" name="next" value="Suivant">
    </form>
</section>



<?php
    require("footer.req.php");
?>