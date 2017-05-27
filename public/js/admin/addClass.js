$(function(){
	grades = document.querySelectorAll('a.list-group-item');
	selectedGrade = 0;
	for(var guide = 0; guide < grades.length; guide++){
		grades[guide].addEventListener('click', selectGrade);
	}
	var form = document.getElementById('form');
	form.addEventListener('submit', submitClass);

function submitClass(e){
	e.preventDefault();
	var data = $('#form').serialize();
	if(selectedGrade == 0){
		document.getElementById('selected').style.visibility = "visible";
	}
	else{
		$.ajax({
			url: '/addClass',
			type: 'post',
			data: data,
			success: function(data){
				if(data == "error"){
					$('#errorModal').modal('show');
				}if(data == "success"){
					$('#successModal').modal('show');
					document.getElementById('form').reset();
					document.getElementById('selected').style.visibility = "hidden";
				}
			}
		});
	}
}

function selectGrade(e){
	e.preventDefault();
	var selected = document.getElementById(this.id);
	var texts = document.getElementById(this.id).firstChild.cloneNode(true);
	var gradeInput = document.getElementById('grade').value = this.id;
	document.getElementById('status').innerHTML = "";	
	document.getElementById('status').append(texts);
	selectedGrade = this.id
	for(var i = 0; i < grades.length ; i++){
		if(grades[i].id==this.id){
			grades[i].style.background = "#54c0c0";
		}else{
			grades[i].style.background = "white";
		}
	}
}

});	