<?php
/**
 * User Manager Handles User Management tasks such as Registration, Password Resets, Login.
 */

class UserManager{
	private $dbCon 					= false;
	private $db 					= false;
	private $sysMgr 				= false;
	private $data 					= false;

	public function __construct(){
		$this->dbCon = new dbCon();
	}

//////////////////PRIVATE METHODS/////////////////////////

	
	private function initiateSession(){

	}

	private function terminateSession(){

	}

	private function verifyUserToken( $token ){

	}

	private function getUserData( ){

	}

	private function setUserData( ){

	}

	private function userExists( ){

	}

	private function isScreenNameUnique( ){

	}

	private function isUserLoggedIn( ){

	}

	private function getNavigation(){

	}

	private function getUserRoles(){
	
	}


/////////////////////PUBLIC METHODS //////////////////////////////////

	public function me(){

	}

	public function registerUser( $username, $pass){
		//check is user exists in user table
		$sql = $this->dbCon->pullRecord("users", array("username"=>$username));
		//if the user exists then send error back UI

		//if user doesn't exist create record in user table

		//initiate session

		return ":p";
	}

	public function loginUser( ){
		
	}

	public function logoutUser( ){

	}

	public function getUserMetaData(){

	}

	public function setUserMetaData(){

	}

	public function verifyUser(){

	}

	public function passwordResetRequest(){

	} 

	public function verifyResetCode( ){

	}

	public function resetPassword(){

	}
}
?>