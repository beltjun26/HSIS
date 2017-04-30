window.onload = function(){
	document.getElementById('side_toggle').addEventListener('click', toggleSidenav);

};

function toggleSidenav(){
	sidenav = document.getElementById('sidenav');
	console.log(sidenav.style.left);
	if(sidenav.style.left=="0px"){
		sidenav.style.left = "-20%";	
	}else{
		sidenav.style.left = "0";
	}
	
}