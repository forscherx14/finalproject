<?php

	/**
	 * index.php is the API landing page. This page serves as a router.
	 * Utilizing the $dataSource defined in config.php the API routes the requests.
	 */
	include_once("config/config.php");
	echo ":)";
	//Array for results data that is sent back to 
	//front end
	$result 	= array();

	//Switch Routes the request depending on the 
	//value of dataSource
	switch( $dataSource ){
		case "userRegistration":
			 $result['status'] 	 = $userMgr->registerUser( $request['username'], $request['password']);
			break;
	}

	//This sends the result back to JS .done() method
	echo json_encode( $result );

?>