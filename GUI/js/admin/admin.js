$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });
});

// Kiểm tra tên đăng nhập đã có trong database chưa ? thông báo màn hình "tên đăng nhập đã tồn tại" : thông báo và bỏ disabled ở nút Đăng ký
$(document).ready(function() {
    $('#username').blur(function(){
        var username = $(this).val();

        $.ajax({
            url:"createValidate.php",
            method:"POST",
            data:{user_name:username},
            success:function(data)
            {
                if(data != '0')
                {
                    $('#availability').html('<span class="text-danger">Tên đăng nhập đã tồn tại</span>');
                    $('#submitBtn').prop("disabled", true);
                }
                else
                {
                    $('#availability').html('<span class="text-success">Tên đăng nhập hợp lệ</span>');
                    $('#submitBtn').prop("disabled", false);
                }
            }
        })
    });
});

