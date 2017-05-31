document.onload = function(){
	document.getElementById("submit").addEventListener("click",saveGrades);
	
}


function saveGrades(){
	console.log("I entered the script");
}


// $(document).ready(function(){
// 	$('#grade_form').submit(function(event){
// 		event.preventDefault();
// 		console.log("I entered ajax");
// 		$.ajax({
// 			url:"/grades/save/",
// 			type: "POST",
// 			data: $this.serialize(),
// 			success:function(data){
// 				console.log("Grades saved: " + data);
// 				$("#")
// 			}
// 		});
// 	})
// });


