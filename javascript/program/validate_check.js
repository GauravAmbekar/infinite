validate_check = function(){
	// alert(1);
	// uname = document.getElementById("uname").value;
	// result = validate_alpha_space(uname);
	// alert(result);
	if(!validate_alpha_space(document.getElementById("uname").value)){
		msg = "Invalid Name";
		document.getElementById("error-uname").innerHTML = msg;
		// console.log(msg);
	}else{
		// umobile = document.getElementById("umobile").value;
		// result = validate_number(umobile);
		if (!validate_number(document.getElementById("umobile").value)) {
			msg = "Invalid Mobile";
			document.getElementById("error-umobile").innerHTML = msg;
			// console.log(msg);
		}else{
			if (!validate_dob(document.getElementById("udob").value)) {
				msg = "Invalid dob";
				document.getElementById("error-udob").innerHTML = msg;
				// console.log(msg);
			}else{
				if (!validate_username(document.getElementById("username").value)) {
					msg = "Invalid Username";
					document.getElementById("error-username").innerHTML = msg;
					// console.log(msg);
				}else{
					if (!validate_email(document.getElementById("uemail").value)) {
						msg = "Invalid Email";
						document.getElementById("error-uemail").innerHTML = msg;
						// console.log(msg);
					}else{
						upass = document.getElementById("upass").value;
						result = validate_password(upass);	
						if (!result) {
							msg = "Invalid Password";
							document.getElementById("error-upass").innerHTML = msg;
							// console.log(msg);
						}else{
							ucpass = document.getElementById("ucpass").value;
							if (ucpass != upass) {
								msg = "Invalid Confirm Password";
								document.getElementById("error-ucpass").innerHTML = msg;
								// console.log(msg);
							}else{
								captcha = document.getElementById("captcha").value;
								if (captcha != sum) {
									msg = "Invalid captcha";
									document.getElementById("error-captcha").innerHTML = msg;
								}else{
									msg = "OK";
									document.getElementById("errmsg").innerHTML = msg;
								}
							}	
						}	
					}	
				}		
			}	
		}
	}
	console.log(msg);
}

get_random_number = function(){
	// console.log(Math.random());
	x1 = Math.round(10 * Math.random());
	x2 = Math.round(10 * Math.random());

	sum = x1+x2;

	str = "Enter"+x1+"+"+x2;
	spanData = document.querySelector("#rand_data");
	spanData.innerHTML = str;
}