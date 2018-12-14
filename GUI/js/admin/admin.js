$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});

// show mật khẩu
var showpassword = true;
function showpass()
{   
    if(showpassword == true)
    {
        document.getElementById("password-group").style.display = 'block';
        showpassword = false;
        return;
    }
    else if(showpassword == false)
    {
        document.getElementById("password-group").style.display = 'none';
        showpassword = true;
        return;
    }

}

