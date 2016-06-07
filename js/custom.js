$(document).ready(function(){
	$("#userReg_btn").click( function(){

		var username 	= $("#username").val();
		var pass1 		= $("#pass1").val();
		var pass2 		= $("#pass2").val();

		var validReg 	= validateUserReg( username, pass1, pass2 );

		if( validReg ){
			var dataSrc = "userRegistration";
			var data = { "username": username, "password": pass1 }

			sendData( dataSrc, data );

		}
	} );


	function sendData( dataSrc, data ){
		console.log( "sendData() initialized...")
		
		$.post("api/", { "dataSource": dataSrc, "data": data }).done( function( data ){
			console.log( data )
		});
	}

	function validateUserReg( username, pass1, pass2 ){
		console.log( "validateUserReg() initialized...")
		var result = false;

		if( username != "" && pass1 != "" && pass2 != "" ){
			if( pass1 == pass2 ){
				if( pass1.length > 5 ){

					result = true;

				}else{
					alert("Password must be at least 6 characters long")
				}
			}else{
				alert("Passwords do not match");
			}
		}else{
			alert("All fields are required!");
		}

		return result;
	}
});