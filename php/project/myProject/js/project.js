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
				// console.log(response);		
				// $(".msg1").text("");
				alert("OTP has been send to your register mobile no.");
				$("#forgot_form2").slideDown();
				$("#forgot_form1").slideUp();
			}
			else{
				// console.log(response);	
				// $(".msg1").html(response);	
				alert(response);
			}
		});
	});
	$("#forgot_btn2").click(function(){
		$.post("actions/otp_action.php", $("#forgot_form2").serialize(), function(response){
			if(response == "ok"){
				$("#forgot_form3").slideDown();
				$("#forgot_form2").slideUp();
			}
			else{
				// console.log(response);	
				// $(".msg1").html(response);	
				alert(response);
			}
		});
	});
	$("#forgot_btn3").click(function(){
		$.post("actions/change_action.php", $("#forgot_form3").serialize(), function(response){
			if(response == "ok"){
				alert("Password has been changed");
				window.location.href = "login.php";

			}
			else{
				// console.log(response);	
				// $(".msg1").html(response);	
				alert(response);
			}
		});
	});
});