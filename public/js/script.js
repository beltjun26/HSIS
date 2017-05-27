
$(document).ready(function() {
    setTimeout(function() {
        $(".alert_invalid").alert('close');
    }, 6000);
});

$(document).ready(function() {
    setTimeout(function() {
        $(".alert_checked_in").alert('close');
    }, 2000);
});


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});



$(document).ready(function(){
	$(document).on("input", "#search", showResult);
    $(document).on("input", "#search_equipment", showResultEquipment);
    $(document).on("input", "#search_history", showResultHistory);
    $(document).on("input", "#search_supply", showResultSupply);
    $(document).on("input", "#search_supply_history", showResultSupplyHistory);

    $(document).on("click", ".check_in", confirmCheckIn);
    $(document).on("click", ".edit_equipment", editEquipment);
    $(document).on("click", ".remove_equipment", confirm_remove);
    $(document).on("click", ".edit_supply", edit_supply);
    $(document).on("click", ".remove_supply", confirmRemoveSupply);    

    $(document).on("submit", "#check_in_verified", checkIn);
    $(document).on("submit", "#remove_verified", remove);
    $(document).on("submit", "#remove_supply_verified", removeSupply);

    
});

function showResultSupplyHistory(){
    console.log("aha");
    $.ajax({
        url: "ajax_urls/process_search_supply_history.php",
        type: "post",
        data: $(this).serialize(),
        success: function(data){
            $(".content_area").html(data);
        }
    });
}

function showResult(){

	$.ajax({
		url: "ajax_urls/process_search.php",
		type: "post",
		data: $(this).serialize(),
		success: function(data){
			$(".content_area").html(data);
		}
	});
}

function showResultEquipment(){
    $.ajax({
        url: "ajax_urls/process_search_equipment.php",
        type: "post",
        data: $(this).serialize(),
        success: function(data){
            $(".content_area").html(data);
        }
    });
}

function showResultHistory(){
    $.ajax({
        url: "ajax_urls/process_search_history.php",
        type: "post",
        data: $(this).serialize(),
        success: function(data){
            $(".content_area").html(data);
        }
    });
}

function showResultSupply(){
    $.ajax({
        url: "ajax_urls/process_search_supply.php",
        type: "post",
        data: $(this).serialize(),
        success: function(data){
            $(".content_area").html(data);
        }
    });
}

function confirmCheckIn() {
    var id = $(this).attr('data-pg');
    $.ajax({
        url : 'ajax_urls/verify_check_in.php',
        type : 'post',
        data :  {'id': id},
        success : function(data){
            $('.modal_content').html(data);
        }
    });
 }

 function confirm_remove() {
    var id = $(this).attr('data-pg');
    $.ajax({
        url : 'ajax_urls/confirm_remove.php',
        type : 'post',
        data :  {'id': id},
        success : function(data){
            $('.equipment_modal_content').html(data);
        }
    });
 }

function checkIn(){
	$.ajax({
		url: "ajax_urls/process_check_in.php",
		type: "post",
		data: $(this).serialize(),
		success: function(data){
			$(".content_area").html(data);
		}
	});
}

function remove(){
    $.ajax({
        url: "ajax_urls/process_remove.php",
        type: "post",
        data: $(this).serialize(),
        success: function(data){
            $(".content_area").html(data);
        }
    });
}

function editEquipment(){
    var id = $(this).attr('data-pg');
    $.ajax({
        url : 'ajax_urls/edit_equipment.php',
        type : 'post',
        data :  {'id': id},
        success : function(data){
            $('.equipment_modal_content').html(data);
        }
    });
}

function edit_supply(){
    var id = $(this).attr('data-pg');
    $.ajax({
        url : 'ajax_urls/edit_supply.php',
        type : 'post',
        data :  {'id': id},
        success : function(data){
            $('.supply_modal_content').html(data);
        }
    });
}

function confirmRemoveSupply() {
    var id = $(this).attr('data-pg');
    $.ajax({
        url : 'ajax_urls/confirm_remove_supply.php',
        type : 'post',
        data :  {'id': id},
        success : function(data){
            $('.supply_modal_content').html(data);
        }
    });
 }

function removeSupply(){
    $.ajax({
        url: "ajax_urls/process_remove_supply.php",
        type: "post",
        data: $(this).serialize(),
        success: function(data){
            $(".content_area").html(data);
        }
    });
}

function date_time(id)
{
		label = "AM";
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }

        if (h==12){
                label = "PM"
        }
        else if(h==0){
            h = 12;
        }
       else if(h>12)
        {
        	h = h-12;
        	label = "PM"
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = '<span class="glyphicon glyphicon-calendar"></span>' + ' '+ months[month]+ ' ' +d+', ' +year+ '&emsp;' + '<span class="glyphicon glyphicon-time"></span>' +' '+h+':'+m+' '+label;
        document.getElementById(id).style.color= "white";
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}


function remain(due_time, n)
{
        var time_current = new Date();
        due_time = new Date(due_time);
        diff = Math.abs(time_current - due_time);

        var date = new Date(diff);
        d = date.getUTCDate()-1;
        h = date.getUTCHours();
        m = date.getUTCMinutes();

        var timeString = '';
        timeString += getTimeString(d, 'day', ',');
        timeString += getTimeString(h, 'hr', ',');
        timeString += getTimeString(m, 'min', '');

               

        element = document.getElementById(n);

        if(m==0 && h==0 && d==0){
            timeString = 'less than a minute';
        }
        if (time_current > due_time){
            element.style.color = 'red';
            timeString = '- ' + timeString;
        }

        element.innerHTML = timeString;
        setTimeout('remain("'+due_time+'", "'+n+'");', '1000');
}

function getTimeString(time_slice, string, delim){
    if (time_slice==1){
        return (time_slice + ' ' + string + delim + ' ');
    }
    else if(time_slice>0){
        return (time_slice + ' ' + string + 's' + delim +' ');
    }

    return '';
}

