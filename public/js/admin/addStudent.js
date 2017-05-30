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
		success: function(data){
			$('#successModal').modal('show');
			document.getElementById('form').reset();
			console.log(data);
		}
	});
}