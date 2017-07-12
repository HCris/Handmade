<?php
	include "../bd/conect.php";
	session_start();
	$login = $_POST['username'];
	$password = $_POST['password'];

	if ($conn) {
		$userreq = mysqli_query($conn, "SELECT * FROM user");
		$response = $userreq->fetch_object();

		if($response->login == $login && $response->password == $password){
			$_SESSION["author"] = true;
			header('Location: ../home.php');
		}
			elseif ($response->login != $login && $response->password != $password){
			print "username sau parola nu sunt corecte";
			}
		}
	elseif(empty($_POST['username']) && empty($_POST['password'])){
		$_SESSION['cg'] = "cinpurile sunt goale";
	}
?>