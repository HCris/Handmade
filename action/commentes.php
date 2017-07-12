<?php 
	include("../bd/conect.php");
	if(!isset($_POST['name'])||
		!isset($_POST['commentes'])){
			echo "formele nu sunt completate";
	}

	$name = $_POST['name'];
	$message = $_POST['commentes'];
	$error_message="";
	$string_exp="";
	$string_exp = '/^[A-Za-z0-9._%-]/';

	if(!preg_match($string_exp,$name)) {
		$error_message .= 'Nume introdus nu pare să fie valabil.<br />';
	}
	if(strlen($message) < 2) {
		$error_message .= 'Mesajul pe care le-ați introdus nu par a fi valide.<br />';
		echo( $error_message );
	}
	$sql= "INSERT INTO commentes (commentes, author) VALUES('$message', '$name');";
		if ($conn->multi_query($sql) === TRUE) {
	}

	$conn->close();
/*header('Location:../collection.php');*/
?>