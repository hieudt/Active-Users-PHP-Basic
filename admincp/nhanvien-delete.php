<?php 

    include 'include/db.php';
    include 'include/lib.php';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
	if ($id != '') {
		xoaNhanVien($id);
	}
   

	header("location: nhanvien-list.php");

?>