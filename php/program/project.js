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
			$(".msg").html(response);
		});
	});
});