$(function(){
	var form = document.getElementById('form');
	form.addEventListener('submit', submitStudent);
});

function submitStudent(e){
	e.preventDefault();
	$.ajax({
		url: "/addStudent",
		type: "post",
		data: $("#form").serialize(),
		success: function(){
			$('#successModal').modal('show');
			document.getElementById('form').reset();
		}
	});
}