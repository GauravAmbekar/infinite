// alert(1);
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
window.scroll = function(){myFunction()};
myFunction(){
	if (window.pageYoffset >= sticky) {
		navbar.classList.add("sticky");
	}else{
		navbar.classList.remove("sticky");
	}
}