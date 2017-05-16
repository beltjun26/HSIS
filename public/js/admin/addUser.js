$(function(){
	var adminbtn = document.getElementById('adminBtn');
	var teacherBtn = document.getElementById('teacherBtn');
	var cashierBtn = document.getElementById('cashierBtn');
	var librarianBtn = document.getElementById('librarianBtn');
	var adminForm = document.getElementById('adminForm');
	var teacherForm = document.getElementById('teacherForm');
	var librarianForm = document.getElementById('librarianForm');
	var cashierForm = document.getElementById('cashierForm');

	adminForm.addEventListener('submit', addUser);
	teacherForm.addEventListener('submit', addUser);
	librarianForm.addEventListener('submit', addUser);
	cashierForm.addEventListener('submit', addUser);

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
function addUser(e){
	console.log("testing");
	e.preventDefault();
	var id = this.id;
	var data = $('#'+this.id).serialize();
	$.ajax({
		url: '/registerUser',
		type: 'post',
		data: data,
		success: function(){
			$('#successModal').modal('show');
			console.log(id);
			document.getElementById(id).reset();		
		}
	});
}