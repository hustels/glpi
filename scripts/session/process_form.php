<?php 


	//session_start();
    require_once('class.messages.php');
	$msg = new Messages();
	if(isset($_POST['username']) && isset($_POST['password'])){
		// if user and the password is iqual de admin/admin , i start the session

		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['id'] = $username;

		if($username == 'admin' && $password == 'admin'){
			header("Location: ../../public/main.php");
		}else{


			header("Location: ../../index.php");
            echo $msg->add('e', 'Usuario o passoword incorrectos!');
		}
	}



 ?>