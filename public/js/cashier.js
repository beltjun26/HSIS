var clickCountFeesCol = 0;

$(document).ready(function(){
	$(document).on("click", "#fees_collection", showSubCategories);
});

function showSubCategories(){
	clickCountFeesCol ++;

	var feesCategory = document.getElementsByClassName("fees-category")[0];
	var feesCollectionSpan = document.getElementById("fees_collection_span");

	if(clickCountFeesCol % 2 == 1){
		feesCategory.style.display = "block";
		feesCollectionSpan.className = "pull-right glyphicon glyphicon-menu-down";
	}	
	else{
		feesCategory.style.display = "none";
		feesCollectionSpan.className = "pull-right glyphicon glyphicon-menu-right";
	}
}