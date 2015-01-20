/**
 * Created by Sulman on 20-Jan-15.
 */
function validUserPass(user,pass) {
    var error="";
    if(user.length<4 || user.length>10) {
        error=error+"user";
    }
    if(pass.length<4 || pass.length>10) {
        error=error+"pass";
    }
    return error;
}

$(document).ready(function(){
    $("#username").keydown(function() {
        if (validUserPass($("#username").val(), $("#password").val()).search("user") == -1) {
            $("#labelUser").html('User Name: <img src="/resources/images/icons/correct.png">');
            $("#labelUser").css("color","black");
        } else {
            $("#labelUser").html('User Name: <img src="/resources/images/icons/wrong.png"/> must be greater than 5 and less than 10');
            $("#submit").addClass("text-muted");
            $('input[type="submit"]').attr('disabled','true');
            $("#labelUser").css("color","red");
        }
        if (validUserPass($("#username").val(), $("#password").val()) == "") {
            $("#submit").removeClass("text-muted");
        }
    });
    $("#password").keydown(function() {
        if (validUserPass($("#username").val(), $("#password").val()).search("pass") == -1) {
            $("#labelPass").html('Password: <img src="/resources/images/icons/correct.png">');
            $("#labelPass").css("color","black");
        } else {
            $("#labelPass").html('Password: <img src="/resources/images/icons/wrong.png"/> must be greater than 5 and less than 10');
            $("#submit").addClass("text-muted");
            $('input[type="submit"]').attr('disabled','true');
            $("#labelPass").css("color","red");
        }
        if (validUserPass($("#username").val(), $("#password").val()) == "") {
            $("#submit").removeClass("text-muted");
            $('input[type="submit"]').removeAttr('disabled');
        }
    });
});
