$(function(){
	container = document.getElementById('listContainer');
	buttons = document.getElementById('buttonList');
	for(let i = 0; i < container.children.length; i++){
		console.log("printing loop");
	}
});

function showClass(id, event){
	event.preventDefault();
	console.log("click"+ id);
	for(let i = 0; i < container.children.length; i++){
		if(id == container.children[i].id){
			document.getElementById(id).style.display = "block"; //The same as using container.children[i]
		}else{
			container.children[i].style.display = "none";
		}
	}
}