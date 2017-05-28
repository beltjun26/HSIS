var clickCountFeesCol = 0;

window.onload = function(){
	// document.getElementById('submit').addEventListener('click', search);
	document.getElementById('side_toggle').addEventListener('click', toggleSidenav);
	if(typeof isScript !== 'undefined'){
		for(var i = 0;i<myScripts.length;i++){
			appendScript(myScripts[i]);
		}
	
	}
	$(document).on("click", "#fees_collection", showSubCategories);
};

function showSubCategories(){
	clickCountFeesCol ++;

	var feesCategory = document.getElementsByClassName("fees-category")[0];
	var feesCollectionSpan = document.getElementById("fees_collection_span");

	if(clickCountFeesCol % 2 == 1){
		feesCategory.style.display = "block";
		feesCollectionSpan.className = "pull-right glyphicon glyphicon-menu-down";
	}	
	else{
		feesCategory.style.display = "none";
		feesCollectionSpan.className = "pull-right glyphicon glyphicon-menu-right";
	}
}

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

// function search(){
// 	var input = document.getElementById("search").value;

// 	console.log(input);

// }