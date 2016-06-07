<?php
	include_once("obj/dbCon.php");
	include("obj/userManager.php");
	include("utilities/PasswordHash.php");

	$db 	 = new dbCon();
	$userMgr = new UserManager();

	$result 	= array();



	$dataSource = $_POST['dataSource'];

	switch( $dataSource ){
		case "userRegistration":
			$result['username']  = $_POST['username'];
			$result['pass1'] 	 = create_hash($_POST['pass1']);
			$result['pass2'] 	 = $_POST['pass2'];

			$result['status'] 	 = $userMgr->registerUser( $result['username'], $result['pass1']);

			break;
	}

	echo json_encode( $result );
?>