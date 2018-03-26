$(document).ready(function(){
	$("#register_btn").click(function(){
		$.post("actions/register_action.php", $("#register_form").serialize(), function(response){
			if (response == "ok") {
				console.log(response);
				$(".msg").html("Activation link has been send to your register Email id.");	
				$("#register_form")[0].reset();
			}else{
				$(".msg").html(response);	
			}
		});
	});

	$('#forgot_form2, #forgot_form3').hide();

	$("#login_btn").click(function(){
		// alert(1);
		// console.log($("#login_form").serialize());
		$.post("actions/login_action.php", $("#login_form").serialize(), function(response){
			if (response == "ok") {
				// console.log(response);
				$("#login_form")[0].reset();
				window.location.href = "welcome.php";
			}else{
				$(".msg").html(response);	
			}
		});
	});

	$("#forgot_btn1").click(function(){
		$.post("actions/forgot_action.php", $("#forgot_form1").serialize(), function(response){
			if(response == "ok"){
				$("#forgot_form1")[0].reset();
				alert("OTP has been send to your register mobile no.");
				$("#forgot_form2, #forgot_form1").slideToggle();
			}
			else{
				alert(response);
				$("#forgot_form1")[0].reset();
			}
		});
	});

	$("#forgot_btn2").click(function(){
		$.post("actions/otp_action.php", $("#forgot_form2").serialize(), function(response){
			if(response == "ok"){
				$("#forgot_form2")[0].reset();
				$("#forgot_form3, #forgot_form2").slideToggle();
			}
			else{
				alert(response);
			}
		});
	});

	$("#forgot_btn3").click(function(){
		$.post("actions/change_action.php", $("#forgot_form3").serialize(), function(response){
			if(response == "ok"){
				$("#forgot_form3")[0].reset();
				alert("Password has been changed");
				window.location.href = "login.php";

			}
			else{
				alert(response);
			}
		});
	});

	$("#password_btn").click(function(){
		$.post("actions/change_password_action.php", $("#password_form").serialize(), function(response){
			if (response == "ok") {
				$(".msg").html("password updated");
				$("#password_form")[0].reset();
			} else {
				$(".msg").html(response);
			}
		});
	});

});