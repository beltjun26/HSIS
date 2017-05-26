 $(function(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	var adminbtn = document.getElementById('admin');
	var teacherbtn = document.getElementById('teacher');
	var cashierbtn = document.getElementById('cashier');
	var librarianbtn = document.getElementById('librarian');
	btnarray = [adminbtn, teacherbtn, cashierbtn, librarianbtn];
	adminbtn.addEventListener('click', changeList);
	teacherbtn.addEventListener('click', changeList);
	cashierbtn.addEventListener('click', changeList);
	librarianbtn.addEventListener('click', changeList);
});
	
	function changeList(e){
		e.preventDefault();
		console.log(this.id);
		var table = document.getElementById('table');
		for(let i = 0 ; i < btnarray.length; i++){
			if(btnarray[i].id == this.id){
				btnarray[i].className = "btn btn-default active";
			}
			else{
				btnarray[i].className = "btn btn-default";
			}
		}
		if(table.name!=this.id){
			while(table.hasChildNodes()){
				table.removeChild(table.lastChild);
			}
			table.name = this.id;
			id = this.id;
			if(this.id == 'admin'){
				var table = "<table><thead><tr><th>ID</th><th>Username</th><th>Name</th><th>Birthday</th><th>Gender</th></tr></thead><tbody>";
				$.ajax({
					url:'/allAccount',
					type: 'post',
					data: {type: id},
					success: function(data){
						console.log(data);
						if(data.length==0){
							table += "table not found";
						}
						else{
							for(let i = 0; i < data.length; i++){
								table += "<tr><td>"+data[i].id+"</td>";
								table += "<td>"+data[i].username+"</td>";
								table += "<td>"+data[i].name+"</td>";
								table += "<td>"+data[i].date+"</td>";
								table += "<td>"+data[i].gender+"</td></tr>"
							}
			
						}
						table += "</tbody></table>";
						document.getElementById('table').innerHTML = table;
					}
				});
			}
			if(this.id == 'cashier'){
				var table = "<table><thead><tr><th>ID</th><th>Username</th><th>Name</th><th>Birthday</th><th>Gender</th></tr></thead><tbody>";
				$.ajax({
					url:'/allAccount',
					type: 'post',
					data: {type: id},
					success: function(data){
						if(data.length==0){
							table += "table not found";
						}
						else{
							for(let i = 0; i < data.length; i++){
								table += "<tr><td>"+data[i].id+"</td>";
								table += "<td>"+data[i].username+"</td>";
								table += "<td>"+data[i].name+"</td>";
								table += "<td>"+data[i].date+"</td>";
								table += "<td>"+data[i].gender+"</td></tr>"
							}
			
						}
						table += "</tbody></table>";
						document.getElementById('table').innerHTML = table;
					}
				});
			}
			if(this.id == 'librarian'){
				var table = "<table><thead><tr><th>ID</th><th>Username</th><th>Name</th><th>Birthday</th><th>Gender</th></tr></thead><tbody>";
				$.ajax({
					url:'/allAccount',
					type: 'post',
					data: {type: id},
					success: function(data){
						if(data.length==0){
							table += "<div>table not found</div>";
						}
						else{
							for(let i = 0; i < data.length; i++){
								table += "<tr><td>"+data[i].id+"</td>";
								table += "<td>"+data[i].username+"</td>";
								table += "<td>"+data[i].name+"</td>";
								table += "<td>"+data[i].date+"</td>";
								table += "<td>"+data[i].gender+"</td></tr>"
							}
			
						}
						table += "</tbody></table>";
						document.getElementById('table').innerHTML = table;
					}
				});
			}
			if(this.id == 'teacher'){
				var table = "<table><thead><tr><th>ID</th><th>Username</th><th>Name</th><th>Birthday</th><th>Gender</th></tr></thead><tbody>";
				$.ajax({
					url:'/allAccount',
					type: 'post',
					data: {type: id},
					success: function(data){
						if(data.length==0){
							table += "<div>table not found</div>";
						}
						else{
							for(let i = 0; i < data.length; i++){
								table += "<tr><td>"+data[i].id+"</td>";
								table += "<td>"+data[i].username+"</td>";
								table += "<td>"+data[i].name+"</td>";
								table += "<td>"+data[i].date+"</td>";
								table += "<td>"+data[i].gender+"</td></tr>"
							}
			
						}
						table += "</tbody></table>";
						document.getElementById('table').innerHTML = table;
					}
				});
			}
			

		}
		else{
			
		}
		
	}



