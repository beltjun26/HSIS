$(function(){
	var adminbtn = document.getElementById('adminBtn');
	var teacherBtn = document.getElementById('teacherBtn');
	var cashierBtn = document.getElementById('cashierBtn');
	var librarianBtn = document.getElementById('librarianBtn');
	cashierBtn.addEventListener('click', cashierClick);
	librarianBtn.addEventListener('click', librarianClick);
	teacherBtn.addEventListener('click', teacherClick);
	adminbtn.addEventListener('click', adminClick);
});

function adminClick(){
	hideAllExecpt('adminForm');
}
function cashierClick(){
	hideAllExecpt('cashierForm');
}
function teacherClick(){
	hideAllExecpt('teacherForm');
}
function librarianClick() {
	hideAllExecpt('librarianForm');	
}
function hideAllExecpt(form_id){
	var header = document.getElementById('form').firstChild;
	if(form_id == "adminForm"){
		header.innerHTML = "Create Admin";
	}else if(form_id == "cashierForm"){
		header.innerHTML = "Create Cashier";
	}else if(form_id == "teacherForm"){
		header.innerHTML = "Create Teacher";
	}else if(form_id == "librarianForm"){
		header.innerHTML = "Create librarian";
	}
	var allForms = document.getElementById('form_container').children;
	document.getElementById('form').style.display = "block";
	for(let i = 0;i<allForms.length;i++){
		if(allForms[i].id == form_id){
			allForms[i].style.display = "block";
		}else{
			allForms[i].style.display = "none";
		}
	}

}