<?php 
	/**
	 * Config.php includes source code from objects and other methods needed in the back end
	 * It also initializes objects and variables needed in the back end such as $postdata
	 */

	//Begin a session observer
	session_start();

	//Include Objects and other methods source code
	include_once("utilities/utilities.php");
	include_once("obj/dbCon.php");
	include_once("obj/SystemManager.php");
	include_once("obj/UserManager.php");

	//Get all DATA $_POST, $_GET, $_REQUEST via file_get_contents()
	$postdata 		= file_get_contents( "php://input" );
	//Encode incoming data as a JSON object
	$requestdata	= json_decode( $postdata );
	//Grab the data Array from JSON
	$request 		= $requestdata->data;
	//Grab the dataSource signal from JSON
	$dataSource	= $requestdata->src;

	//Instantiate Back-end Objects
	$dbCon 			= new dbCon();
	$sysMgr 		= new SystemManager();
	$userManager 	= new UserManager();
?>