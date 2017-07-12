<?php
	include("../bd/conect.php");
	if(!isset($POST["name"])|| !isset($POST["file"])|| !isset($POST["description"])){

	}

	$name = $_POST['name'];

	

	foreach ($_FILES['file'] as $key => $value) {

		if ($key === "tmp_name") {
			foreach ($value as $key => $val) {

				$filename = $key . '.jpg';
				$des = "../post_images/" . $filename;

				move_uploaded_file($val, $des);

			}

		}
	}


	// $description = $_POST['description'];
	// $sql= "INSERT INTO collection (name_collection, description, image) VALUES('$name', '$description','$file');";
	// $conn->query($sql);

	// $conn->close();
	// header('Location: ../work.php');
?>