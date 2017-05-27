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
		success: function(data){
			$('#successModal').modal('show');
			document.getElementById('form').reset();
			var li = document.createElement('li');
			var text = document.createTextNode(data);
			li.appendChild(text);
			li.className = "list-group-item";
			document.getElementById('gradeList').appendChild(li);
		}
	});

}