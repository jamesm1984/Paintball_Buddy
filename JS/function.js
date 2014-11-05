
function open_close_menu(){
	var menu = document.getElementById('nav').style;
	var width_amount = menu.width;

	if(width_amount >= "70px" || width_amount === ""){
		menu.width = "120px";
		menu.height = "355px";
	} else {
		menu.width = "70px";
		menu.height = "70px";
	}
}

function open_l_r(){
	document.getElementById('l_r_container').style.display = "block";
}