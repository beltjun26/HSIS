$(function(){
	var form = document.getElementById('form');
	form.addEventListener('submit', addGrade);
});

function addGrade(e){
	e.preventDefault();
	var grade = $("#form").serialize();
	console.log(grade);
	$.ajax({
		url: '/addGrade',
		type: 'post',
		data: grade,
		success: function(){
			$('#successModal').modal('show');
			document.getElementById('form').reset();
		}
	});

}