function sendContact() {
    var valid;	
    valid = validateContact();
    if(valid) {
        jQuery.ajax({
            url: "cmail.php",
            data:'name='+$("#mail_name").val()+'&email='+
            $("#mail_email").val()+'&subject='+
            $("#mail_subject").val()+'&message='+
            $("#mail_message").val(),
            type: "POST",
            success:function(data){
                $("#mail-status").css('visibility', 'visible');
                $("#mail-status").css('display', 'block');
            },
            error:function (){}
        });
	}
	return false;
}

function validateContact() {
	var valid = true;	
	$("#mail-status-error").css('visibility', 'hidden');
	$("#mail-status-error").css('display', 'none');
    if(!$("#mail_name").val()) {
		$("#mail-status-error").html('Name cannot be left blank');
		$("#mail-status-error").css('visibility', 'visible');
		$("#mail-status-error").css('display', 'block');
        return false;
    }
    if(!$("#mail_email").val()) {
		$("#mail-status-error").html('Email cannot be left blank');
		$("#mail-status-error").css('visibility', 'visible');
		$("#mail-status-error").css('display', 'block');
        return false;
    }
    if(!$("#mail_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#mail-status-error").html('Enter valid email address');
		$("#mail-status-error").css('visibility', 'visible');
		$("#mail-status-error").css('display', 'block');
        return false;
    }
    if(!$("#mail_subject").val()) {
		$("#mail-status-error").html('Subject cannot be left blank');
		$("#mail-status-error").css('visibility', 'visible');
		$("#mail-status-error").css('display', 'block');
        return false;
    }
    if(!$("#mail_message").val()) {
		$("#mail-status-error").html('Message cannot be left blank');
		$("#mail-status-error").css('visibility', 'visible');
		$("#mail-status-error").css('display', 'block');
        return false;
    }
    return valid;
}