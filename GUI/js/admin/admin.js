$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'bottom'
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

// Kiểm tra tên hãng sản xuất đã có trong database chưa ? thông báo màn hình "tên hãng sản xuất đã tồn tại" : thông báo và bỏ disabled ở nút Đăng ký
$(document).ready(function() {
    $('#tenhsx').blur(function(){
        var tenhsx = $(this).val();

        $.ajax({
            url:"createValidate.php",
            method:"POST",
            data:{tenHSX:tenhsx},
            success:function(data)
            {
                if(data != '0')
                {
                    $('#availability').html('<span class="text-danger">Hãng đã tồn tại</span>');
                    $('#submitBtn').prop("disabled", true);
                }
                else
                {
                    $('#availability').html('<span class="text-success">Hãng hợp lệ</span>');
                    $('#submitBtn').prop("disabled", false);
                }
            }
        })
    });
});

// Kiểm tra tên loại sản phẩm đã có trong database chưa ? thông báo màn hình "tên hãng sản xuất đã tồn tại" : thông báo và bỏ disabled ở nút Đăng ký
$(document).ready(function() {
    $('#tenlsp').blur(function(){
        var loaisp = $(this).val();

        $.ajax({
            url:"createValidate.php",
            method:"POST",
            data:{tenloaisp:loaisp},
            success:function(data)
            {
                if(data != '0')
                {
                    $('#availability').html('<span class="text-danger">Đã tồn tại</span>');
                    $('#submitBtn').prop("disabled", true);
                }
                else
                {
                    $('#availability').html('<span class="text-success">Hợp lệ</span>');
                    $('#submitBtn').prop("disabled", false);
                }
            }
        })
    });
});

// Kiểm tra tên sản phẩm đã có trong database chưa ? thông báo màn hình "Đã tồn tại" và bỏ disabled ở nút Đăng ký
$(document).ready(function() {
    $('#tensp').blur(function(){
        var tensp = $(this).val();

        $.ajax({
            url:"createValidate.php",
            method:"POST",
            data:{tensanpham:tensp},
            success:function(data)
            {
                if(data != '0')
                {
                    $('#availability').html('<span class="text-danger">Đã tồn tại</span>');
                    $('#submitBtn').prop("disabled", true);
                }
                else
                {
                    $('#availability').html('<span class="text-success">Hợp lệ</span>');
                    $('#submitBtn').prop("disabled", false);
                }
            }
        })
    });
});

$('.timkiem').keyup(function () {
    var mData = $('.timkiem').val();
    var mLoai = $(this).attr("data-loai");
    $.ajax({
        url:'exSearch.php',
        method:'POST',
        data:{obj:mData, loai:mLoai},
        success:function (data) {
            $('.noidung').html(data);
        }
    });
});