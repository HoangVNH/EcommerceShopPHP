<?php
    $maTK = isset($_GET['id']) ? $_GET['id'] : null;
    $biXoa = isset($_GET['d']) ? $_GET['d'] : null;

    $taiKhoanBUS = new TaiKhoanBUS();

    if($biXoa == 0)
        $taiKhoanBUS->SetDelete($maTK);
    else
        $taiKhoanBUS->UnsetDelete($maTK);

echo "<script>alert('Cập nhật thông tin thành công !')</script>";
echo "<script>window.open('?a=2','_self')</script>";