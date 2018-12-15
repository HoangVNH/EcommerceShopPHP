<?php

$maHSX = isset($_GET['id']) ? $_GET['id'] : '';
$biXoa = isset($_GET['d']) ? $_GET['d'] : '';

$hangSanXuatBUS = new HangSanXuatBUS();

if ($biXoa == 0)
    $hangSanXuatBUS->SetDelete($maHSX);
else
    $hangSanXuatBUS->UnsetDelete($maHSX);

echo "<script>alert('Cập nhật thông tin thành công !')</script>";
echo "<script>window.open('?a=7','_self')</script>";
