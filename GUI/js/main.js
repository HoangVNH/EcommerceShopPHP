/* show ảnh thông tin*/
$(function () {

    $('.photo-gallery ul li').click(function () {
        var src = $(this).data('src');
        var $gallery = $(this).closest('.photo-gallery');
        $gallery.find('.current-photo img').attr('src', src);
    });

    $('.photo-gallery').each(function () {
        $(this).find('li')[0].click();
    });

});

// Kiểm tra tên đăng nhập đã có trong database chưa ? thông báo màn hình "tên đăng nhập đã tồn tại" : thông báo và bỏ disabled ở nút Đăng ký
$(document).ready(function() {
    $('#username').blur(function(){
        var username = $(this).val();

        $.ajax({
            url:'GUI/pages/signupValidate.php',
            method:"POST",
            data:{user_name:username},
            success:function(data)
            {
                if(data != '0')
                {
                    $('#availability').html('<span class="text-danger">Tên đăng nhập đã tồn tại</span>');
                    $('#register').prop("disabled", true);
                }
                else
                {
                    $('#availability').html('<span class="text-success">Tên đăng nhập hợp lệ</span>');
                    $('#register').prop("disabled", false);
                }
            }
        })
    });
});

// Kiểm tra Captcha bằng Ajax
$(document).ready(function(){
    $("#captcha").blur(function () {
        var captchaCode = $("#captcha").val();

        if($.trim(captchaCode) == ''){
            alert("Vui lòng nhập captcha");
        }
        else{
            $.ajax({
                dataType:'json',
                url:'GUI/pages/exCaptcha.php',
                method:'POST',
                data:{captchacode:captchaCode},
                success:function(result){
                    if(!result.hasOwnProperty('error'))
                    {
                        alert("Kết quả trả về không phù hợp");
                    }
                    else if(result['error'] == 'success'){
                        alert("Captcha hợp lệ");
                        $('#register').attr("disabled", false);
                    }
                    else{
                        if (result['captcha'] != '')
                        {
                            alert(result['captcha']);
                            $('#register').attr("disabled", true);
                        }
                    }
                }
            });
        }
        return false;
    });
});

// thay đổi số lượng sản phẩm = Ajax ở trang cart.php
$(document).ready(function(){
    $(".qty").change(function(){
        slm = $(this).val();
        masp = $(this).attr("data-masp");
        $.ajax({
            url:"?a=109",
            type:"POST",
            data:"slm="+slm+"&masp="+masp,
            success:function(){
                location.reload("#sp" + masp);
            }
        });
    });
});

// Xoá sản phẩm = Ajax ở trang cart.php
$(document).ready(function (){
   $(".myDelete").click(function(){
        maSP = $(this).attr("data-sp");
        $.ajax({
            url:"?a=110",
            type:"POST",
            data:"id="+maSP,
            success:function () {
                $("#sp" + maSP).remove();
                location.reload("cart-total");
            }
        });
   });
});

$(document).ready(function($) {
	strengthResult = $('#chkpwd');

	strengthResult.show();

	$('#password').keyup(function(e) {
        pass1 = $('#password').val(); 
        pass2 = $('#confirmPassword').val();

		if (pass1 != '') {
			AddStyle (passwordStrength(pass1, pass2));
		} else{
			strengthResult.removeClass().text('Độ mạnh mật khẩu');
		}
	});

	$('#confirmPassword').keyup(function() {

        pass1 = $('#password').val();
        pass2 = $('#confirmPassword').val();

		if (pass1 != '') {
			AddStyle (passwordStrength(pass1, pass2));
		} else{
			strengthResult.removeClass().text('Độ mạnh mật khẩu');
		}
	});

	// $('#register').click(function() {

    //     pass1 = $('#password').val();
    //     pass2 = $('#confirmPassword').val();

    //     if(pass1 != '' && pass2 != '' && strengthResult.attr('class') != 'short')
    //     {
    //         $('#password').val('');
    //         $('#confirmPassword').val('');
	// 		strengthResult.removeClass().text('Độ mạnh mật khẩu');
	// 	}
	// });

	function AddStyle(result) {
		if (result == 1 || result == 2) {
			strengthResult.removeClass().addClass('bad').text('Mật khẩu yếu')
        }
		if (result == 3){
			strengthResult.removeClass().addClass('good').text('Mật khẩu trung bình')
		}
		if (result == 4){
			strengthResult.removeClass().addClass('strong').text('Mật khẩu mạnh')
		}
		if (result == 5){
			strengthResult.removeClass().addClass('short').text('Mật khẩu không trùng khớp')
		}
	}

	// Password strength meter
	function passwordStrength(password1, password2) {
		var mkNgan = 1, mkYeu = 2, mkTot = 3, mkCucManh = 4, kTrungKhop = 5, doManh = 0;

		// password 1 != password 2
		if ( (password1 !== password2) && password2.length > 0)
            return kTrungKhop;

		//password < 4
		if ( password1.length < 4 )
			return mkNgan;

		if ( password1.match(/[0-9]/) )
            doManh += 3;
		if ( password1.match(/[a-z]/) )
            doManh += 4;
		if ( password1.match(/[A-Z]/) )
            doManh += 5;
		if ( password1.match(/[,!,@,#,$,%,^,&,*,?,_,~,-,(,),]/) )
            doManh += 6;

		if (doManh < 12 )
			return mkYeu;

		if (doManh < 14 )
			return mkTot;

	    return mkCucManh;
	}
});