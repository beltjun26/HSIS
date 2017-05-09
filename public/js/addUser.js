$(function(){
	var adminbtn = document.getElementById('adminBtn');
	var teacherBtn = document.getElementById('teacherBtn');
	teacherBtn.addEventListener('click', teacherClick);
	adminbtn.addEventListener('click', adminClick);
});

function adminClick(){
	var form = document.getElementById('form');
	var header = form.firstChild;
	var adminForm = document.getElementById('adminForm');
	adminForm.style.display = "block";
	header.innerHTML = "Create Admin";
	form.style.display = "block";

}
function cashierClick(){
	
}
function teacherClick(){
	var form = document.getElementById('form');
	var header = form.firstChild;
	var teacherForm = document.getElementById('teacherForm');
	teacherForm.style.display = "block";
	header.innerHTML = "Create Teacher";
	form.style.display = "block";
}
function librarian() {
	
}