var clickCountFeesCol = 0;

$(document).ready(function(){
	var category = document.getElementsByClassName("category");
	console.log(category);
	console.log("hello world");

	createGraph(category);
	
	$(document).on("click", "#fees_collection", showSubCategories);
	$(document).on("click", "#get_student_info", showStudentInfo);
	$(document).on("click", ".pay-now", computeTotal);
});

function createGraph(category){
	
}


function computeTotal(){
	var items = document.getElementsByClassName("amount");

	var total = 0;
	for(i= 0; i<items.length; i++){
		total += parseInt(items[i].innerHTML.split(" ")[1]);
	}
	
	var totalAmount = document.getElementsByClassName("total-amount")[0];
	totalAmount.innerHTML = "Php " + total + ".00";
}

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

function showStudentInfo(){
	var search_div = document.getElementById("search_student");
	var payment = document.getElementById("payment");
	var receipt = document.getElementById("receipt");

	search_div.style.display = "none";
	payment.style.display = "block";
	receipt.style.display = "block";


}