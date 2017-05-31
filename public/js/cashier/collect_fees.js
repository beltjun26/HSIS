$(document).ready(function(){

	$(document).on("click", "#pay_now", putToReceipt);
	$(document).on("click", ".remove", removeFromReceipt);
});


function removeFromReceipt(){
	var rowId = $(this).attr('data-pg');
	var paylist = document.getElementById("paylist");
	var idList = paylist.value.split("_");
	
	var new_paylist = "";
	for(var i=0; i<idList.length; i++){
		if(idList[i]!=rowId && idList[i]!= ""){
			new_paylist += idList[i] +"_";
		}
	}

	paylist.value = new_paylist;

	var receipt_item = document.getElementById("pay_"+rowId);
	var pay_amount_total = document.getElementById("pay_amount_total");

	var pay_amount = parseInt(document.getElementById("receiptAmount_"+rowId).innerHTML.split(" ")[1]);

	var total_amount = parseInt(pay_amount_total.innerHTML.split(" ")[1]) - pay_amount;
	pay_amount_total.innerHTML = "Php "+total_amount;
	receipt_item.style.display = "none";

	returnToList(rowId, pay_amount);
}

function returnToList(rowId, pay_amount){
	var total_acc = document.getElementById("total_acc");

	var row = document.getElementById("unpaid_"+rowId);
	row.style.display = "table-row";

	unpaid_amount = parseInt(total_acc.innerHTML.split(" ")[1]);
	unpaid_amount = unpaid_amount + pay_amount;

	total_acc.innerHTML = "Php "+ unpaid_amount;
}

function putToReceipt(){
	var rowId = $(this).attr('data-pg');

	var total_acc = document.getElementById("total_acc");
	var pay_amount = parseInt(document.getElementById("amount_"+rowId).innerHTML.split(" ")[1]);

	var row = document.getElementById("unpaid_"+rowId);
	row.style.display = "none";

	unpaid_amount = parseInt(total_acc.innerHTML.split(" ")[1]);
	unpaid_amount = unpaid_amount - pay_amount;

	total_acc.innerHTML = "Php "+ unpaid_amount;

	showToReceipt(rowId, pay_amount);

}


function showToReceipt(rowId, pay_amount){
	var receipt_item = document.getElementById("pay_"+rowId);
	var pay_amount_total = document.getElementById("pay_amount_total");

	var paylist = document.getElementById("paylist");
	paylist.value += rowId+"_";

	var total_amount = parseInt(pay_amount_total.innerHTML.split(" ")[1]) + pay_amount;
	pay_amount_total.innerHTML = "Php "+total_amount;
	receipt_item.style.display = "block";
}