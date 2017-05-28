
$(document).ready(function(){
	var category = document.getElementsByClassName("category");
	console.log(category);
	console.log("hello world");

	createGraph(category);
	
	$(document).on("click", "#get_student_info", showStudentInfo);
	$(document).on("click", ".pay-now", computeTotal);
	$(document).on("click", ".editCategory", editCategory);
});

function editCategory(){
	console.log("anyeong!");
}

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

function showStudentInfo(){
	var search_div = document.getElementById("search_student");
	var payment = document.getElementById("payment");
	var receipt = document.getElementById("receipt");

	search_div.style.display = "none";
	payment.style.display = "block";
	receipt.style.display = "block";


}