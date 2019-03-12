<?php 

	include 'db.php';
	include 'lib.php';


	$id = !empty($_GET['id']) ? $_GET['id'] : "";
	$check = ActiveUsers($id);
	if ($check) {
		header("Location: admincp.php");
	}
	else {
		echo "Thất bại";
	}
	

?>