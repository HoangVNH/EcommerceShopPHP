/*start Lấy ngày tháng năm tự động */
$(function () {
    //Năm tự động điền vào select
    var seYear = $('#year');
    var date = new Date();
    var cur = date.getFullYear();

    seYear.append('<option value="">[Năm]</option>');
    for (i = cur; i >= 1900; i--) {
        seYear.append('<option value="' + i + '">' + i + '</option>');
    };

    //Tháng tự động điền vào select
    var seMonth = $('#month');
    var date = new Date();

    var month = new Array();
    month[1] = "January";
    month[2] = "February";
    month[3] = "March";
    month[4] = "April";
    month[5] = "May";
    month[6] = "June";
    month[7] = "July";
    month[8] = "August";
    month[9] = "September";
    month[10] = "October";
    month[11] = "November";
    month[12] = "December";

    seMonth.append('<option value="">[Tháng]</option>');
    for (i = 1; i < 13; i++) {
        seMonth.append('<option value="' + i + '">' + month[i] + '</option>');
    };

    //Ngày tự động điền vào select
    function dayList(month, year) {
        var day = new Date(year, month, 0);
        return day.getDate();
    }

    $('#year, #month').change(function () {
        //Đoạn code lấy id không viết bằng jQuery để phù hợp với đoạn code bên dưới
        var y = document.getElementById('year');
        var m = document.getElementById('month');
        var d = document.getElementById('day');

        var year = y.options[y.selectedIndex].value;
        var month = m.options[m.selectedIndex].value;
        var day = d.options[d.selectedIndex].value;
        if (day == ' ') {
            var days = (year == ' ' || month == ' ') ? 31 : dayList(month, year);
            d.options.length = 0;
            d.options[d.options.length] = new Option('[Ngày]', ' ');
            for (var i = 1; i <= days; i++)
                d.options[d.options.length] = new Option(i, i);
        }
    });
});
/*end Lấy ngày tháng năm tự động */

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


/** serch */
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
/** hết serch */

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

$(function () {
    $('a[href="#search"]').on('click', function (event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function (event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
});

/* shopping cart  */
/* đặt tỉ lệ */

/* Chỉ định tác vụ */
// $('.product-quantity input').change( function() {
//     updateQuantity(this);
// });

$('.product-removal button').click( function() {
    removeItem(this);
});

/* hết phần shopping cart */

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