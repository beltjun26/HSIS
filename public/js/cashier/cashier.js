
$(document).ready(function(){
	var category = document.getElementsByClassName("category");
	console.log(category);
	console.log("hello world");

	createGraph(category);
	
	// $(document).on("click", "#get_student_info", showStudentInfo);
	$(document).on("sumbit", ".edit_category", editCategory);
});

function editCategory(){
	console.log("anyeong!");
}

function createGraph(category){
	
}

function showStudentInfo(){
	var search_div = document.getElementById("search_student");
	var payment = document.getElementById("payment");
	var receipt = document.getElementById("receipt");

	search_div.style.display = "none";
	payment.style.display = "block";
	receipt.style.display = "block";

}