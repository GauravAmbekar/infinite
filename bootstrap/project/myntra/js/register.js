$(document).ready(function(){
	$(".btn").click(function(){
		// alert(1);
		// console.log($("#register_form"));

		record = $("#register_form").serialize();
		console.log(record);
		$.post("login_action.php",record,function(response){
			console.log(response);

			$(".msg").html(response);
		});
	});
});
