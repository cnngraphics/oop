
<form action="" method="POST">
<input type="text" value="" name="name">
<input type="submit" value="Submit" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
	
	//print_r($_POST['name']);
		
	$name=htmlspecialchars($_POST['name']);

	switch ($name) {
		case "theo":
		echo "Welcome Theo";
		break;

		case "Mica":
		echo "Welcome Mica";

		case "none":
		define("NONAME",'unknown');
		echo NONAME;
		break;

		default: 0;
	}

}


?>