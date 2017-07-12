<?php
	include("../bd/conect.php");
	if(!isset($POST["name"])|| !isset($POST["file"])|| !isset($POST["description"])){

	}

	$name = $_POST['name'];

	print "<pre>";
	print_r($_FILES['file']);
	print "</pre>";

	// ---logic with multiple upload image
	$img = $_FILES["file"];
	foreach ($img["tmp_name"] as $key => $tmp_name) {
		// file name
		$image_name = "../post_images/" . $img["name"][$key];
		$file_size = $img["size"][$key];
		//if file exist in post_images
		if (file_exists($image_name)) {
			// remove file from folder in order to dublicate
			unlink($image_name);
		}
		// // if not empty name of file, move file select to directori suitable
		if(!empty($image_name)){
			move_uploaded_file($tmp_name, $image_name);
			$image_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/AurelBs/post_images/' . $img["name"][$key];
		}else{
			$image_url = "";
		}
		// ---logic with multiple upload image
		$sql_img = "INSERT INTO `images` (`id`, `id_post`, `bg`) VALUES (NULL, '$id_post', '$image_url')";
		$con->query($sql_img);
	}/*END logic with multiple upload image*/


	$description = $_POST['description'];
	$sql= "INSERT INTO collection (name_collection, description, image) VALUES('$name', '$description','$file');";
	// $conn->query($sql);

	// $conn->close();
	// header('Location: ../work.php');
?>