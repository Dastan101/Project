<?php
	session_start();
	include 'functions.php';
	if (!isset($_POST['id'])) {
		header("Location:index.php");
	}

	$id = $_POST['id'];

	$f_name = "images/";
	$p_name = $id."_image.jpg";

	$full_path = $f_name.$p_name;

	if (is_uploaded_file($_FILES['img']['tmp_name'])) {
		move_uploaded_file($_FILES['img']['tmp_name'], $full_path);
		toUploadImage($id,$full_path);
		echo "Success";
	}
?>