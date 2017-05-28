$(function(){
	
	var result = document.getElementById('result');
	var search = document.getElementById('searching');
	var change = document.getElementById('change');
	search.addEventListener('submit', searchStudent);
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
});

function searchStudent(e){
	e.preventDefault();
	var datas = $('#searching').serialize();
	$.ajax({
		url: '/searchStudent',
		type: 'post',
		data: datas,
		success:function(data){
			var results = document.getElementById('result');
			results.innerHTML = "";
			document.getElementById('label').style.display = "block";
			if(data.length == 0){
				results.innerHTML = "<p class='text-danger text-center'>No Result</p>";
			}
			for(let i = 0; i < data.length; i++){
				var li = "<a onclick='assignStudent("+data[i].LRN+")' href='#' class='list-group-item'>"+data[i].first_name+" "+data[i].middle_name+" "+data[i].last_name+"<span class='glyphicon glyphicon-plus pull-right'></span></a>";
				results.innerHTML = results.innerHTML + li;
			}
		}
	});
}

function assignStudent(id){
	var grade = document.getElementById('grade').innerHTML;
	var obj = this;
	console.log(obj);
	$.ajax({
		url: '/assignStudent',
		type: 'post',
		data: {"LRN":id, "grade":grade},
		success: function(data){
			console.log(data);
			if(data=="OK"){
				$('#successModal').modal('show');
			}else{
				document.getElementById('modalContent').innerHTML = data;
				$('#errorModal').modal('show');

			}

		}
	});
}
