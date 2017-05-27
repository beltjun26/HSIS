window.onload  = function(){
	console.log("hi");
	$(document).on("click", "#student_info_pay", getStudentInfo);
};

function getStudentInfo(e){

	e.preventDefault();

	var id=document.getElementById("student_name");
	console.log(id);


}