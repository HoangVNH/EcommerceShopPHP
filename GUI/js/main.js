

/* Kiểm tra độ mạnh password */
// Phải chứa kí tự là chữ hoa, số, kí tự gạch dưới hoặc kí tự đặc biệt như $...
var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
// Độ dài mật khẩu phải chứa ít nhất là 6 kí tự
var okRegex = new RegExp("(?=.{6,}).*", "g");
$(document).ready(function () {

    $('#password, #confirmPassword').on('keyup', function (e) {

        if ($('#password').val() == '' && $('#confirmPassword').val() == '') {
            $('#passwordStrength').removeClass().html('');

            return false;
        }

        if ($('#password').val() != '' && $('#confirmPassword').val() != '' && $('#password').val() != $('#confirmPassword').val()) {
            $('#passwordStrength').removeClass().addClass('alert alert-error').html('Mật khẩu không hợp lệ!');
            return false;
        }

        // Phải có chữ cái viết hoa, số và chữ thường
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");

        // Phải có chữ in hoa và chữ thường hoặc chữ thường và số
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");

        // Phải dài ít nhất 6 ký tự
        var okRegex = new RegExp("(?=.{6,}).*", "g");

        if (okRegex.test($(this).val()) === false) {
            // Nếu ok regex không khớp với mật khẩu
            $('#passwordStrength').removeClass().addClass('alert alert-error').html('Mật khẩu phải dài 6 ký tự.');

        } else if (strongRegex.test($(this).val())) {
            // Nếu reg ex khớp với mật khẩu mạnh
            $('#passwordStrength').removeClass().addClass('alert alert-success').html('Mật khẩu tốt!');
        } else if (mediumRegex.test($(this).val())) {
            // If medium password matches the reg ex
            $('#passwordStrength').removeClass().addClass('alert alert-info').html('Làm cho mật khẩu của bạn mạnh hơn với nhiều chữ cái viết hoa hơn, nhiều số và ký tự đặc biệt hơn!');
        } else {
            // If password is ok
            $('#passwordStrength').removeClass().addClass('alert alert-error').html('Mật khẩu yếu, hãy thử sử dụng số và chữ hoa.');
        }

        return true;
    });
});

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

// So sánh mật khẩu và mật khẩu nhập lại ở trang đăng ký nếu không trùng khớp sẽ diasabled nút Đăng ký
$('#password, #confirmPassword').on('keyup', function(){
    if ($('#password').val() != '' && $('#confirmPassword').val() != '' && $('#password').val() == $('#confirmPassword').val())
    {
        $('#matchpwd').html('Mật khẩu trùng khớp').css('color', 'green');
        $('#register').prop('disabled', false);
    } else
    {
        $('#matchpwd').html('Mật khẩu không trùng khớp').css('color', 'red');
        $('#register').prop('disabled', true);
    }
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
            // url:"GUI/pages/exQty.php",
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