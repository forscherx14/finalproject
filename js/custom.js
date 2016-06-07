$(document).ready(function(){
	$("#userReg_btn").click( function(){

		var username 	= $("#username").val();
		var pass1 		= $("#pass1").val();
		var pass2 		= $("#pass2").val();

		console.log( username + " " + pass1 + " " + pass2 );

		if( username != "" && pass1 != "" && pass2 != "" ){
			if( pass1 == pass2 ){
				if( pass1.length > 5 ){
					$("#userRegistrationForm").submit();
				}else{
					alert("Password must be at least 6 characters long")
				}
			}else{
				alert("Passwords do not match");
			}
		}else{
			alert("All fields are required!");
		}



	} );
});