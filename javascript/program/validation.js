// alert(1);
function validate_alpha(rec){
		pattern = /^[a-zA-Z]+$/;
		return pattern.test(rec);
}
function validate_alpha_space(rec){
		pattern = /^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
		return pattern.test(rec);
}
function validate_alphanum(rec){
		pattern = /^[a-zA-Z0-9]+$/;
		return pattern.test(rec);
}
function validate_alphanum_space(rec){
		pattern = /^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/;
		return pattern.test(rec);
}
function validate_dob(rec){
		pattern = /^([0]?[1-9]|[1][0-9]|[2][0-9]|[3][0-1])\-([0]?[0-9]|[1][0-2])\-([\d]{4})$/;
		return pattern.test(rec);
}
function validate_domain(rec){
		pattern = /^([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/;
		return pattern.test(rec);
}
function validate_number(rec){
		pattern = /^[1-9][0-9]{9}$/;
		return pattern.test(rec);
}
function validate_password(rec){
		pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#]).{4,8}$/;
		return pattern.test(rec);
}
function validate_username(rec){
		pattern = /^[a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9]$/;
		return pattern.test(rec);
}
function validate_email(rec){
		pattern = /^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9\-]+[a-zA-Z0-9])\.([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/;
		return pattern.test(rec);
}
