$(document).ready(function(){
	$(".btn").click(function(){
		// alert(1);
		// console.log($("#register_form"));
		record = $("#register_form").serialize();
		// console.log(record);
		$.post("register_action.php", record, function(response){
			// console.log(response);
			$(".msg").html(response);
		});
	});

	$(".login_btn").click(function(){
		// alert(1);
		login_data = $("#login_form").serialize();
		$.post("login_action.php", login_data, function(response){
			// $(".msg").html(response);
			window.location.href = "welcome.php";
		});
	});


	$('#forgot_form2, #forgot_form3').hide();
	$(".forgot_btn1").click(function(){
		// console.log($("#forgot_form1"));
		record = $("#forgot_form1").serialize();
		// console.log(record);

		$.post("forgot_action.php", record, function(response){
			// console.log(response);

			if (response == "ok") {
				$(".msg").text("");
				$("#forgot_form2").slideDown();
				$("#forgot_form1").slideUp();

				$(".forgot_btn2").click(function(){
					// alert(1);
					record = $("#forgot_form1").serialize();	

				});
			} else {
				$(".msg").html(response);
			}
		});
	});
});