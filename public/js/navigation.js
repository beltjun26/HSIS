window.onload = function(){
	document.getElementById('side_toggle').addEventListener('click', toggleSidenav);
	if(typeof isScript !== 'undefined'){
		for(var i = 0;i<myScripts.length;i++){
			appendScript(myScripts[i]);
		}
		
	}
};

function toggleSidenav(e){
	e.preventDefault();
	sidenav = document.getElementById('sidenav');
	if(sidenav.style.left=="0px"){
		sidenav.style.left = "-250px";	
	}else{
		sidenav.style.left = "0";
	}
	
}

function appendScript(scriptSrc){
	var s = document.createElement("script");
	s.type = "text/javascript";
	s.src = scriptSrc;
	$("head").append(s);
}