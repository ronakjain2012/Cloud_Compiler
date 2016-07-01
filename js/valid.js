$(document).ready(function(e) {
	$('#reg_userID').keyup(function(e) {
        var userId = $('#reg_userID').val();
		$.post("validation.php",
        {
		  userID: userId
        },
		function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
			if(status=="success") {
				$('#Wreg_userID').html(data);	
			}
        });
		
    });
});

$(document).ready(function(e) {
$('#reg_userName').keyup(function(e) {
        var username1 = $('#reg_userName').val();
		$.post("validation.php",
        {
		  userName: username1
        },
		function(data,status){
            //alert("Data: " + data + "\nStatus: " + status);
			if(status=="success") {
				$('#Wreg_userName').html(data);	
			}
        });
		
    });
	
});

$(document).ready(function(e) {
$('#Email').keyup(function(e) {
        var username1 = $('#Email').val();
		$.post("validation.php",
        {
		  email: username1
        },
		function(data,status){
           // alert("Data: " + data + "\nStatus: " + status);
			if(status=="success") {
				$('#WEmail').html(data);	
			}
        });
		
    });
});
	
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

function isNumberKey1(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$(document).ready(function() {
    $("#Mobile").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode >= 35 && e.keyCode <= 39)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57))) {
            e.preventDefault();
        }
    });
});

$(document).ready(function() {
    $("#reg_userID").keydown(function (e) {
        if (($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 )) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57))) {
            e.preventDefault();
        }
    });
});

function lettersOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122) && (charCode != 32)) {
          return false;
       }
       return true;
     }
// JavaScript Document