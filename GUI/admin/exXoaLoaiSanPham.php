<?php
$maLoai = isset($_GET['id']) ? $_GET['id'] : '';
$biXoa = isset($_GET['d']) ? $_GET['d'] : '';

$loaiSanPhamBUS = new LoaiSanPhamBUS();

if ($biXoa == 0)
    $loaiSanPhamBUS->SetDelete($maLoai);
else
    $loaiSanPhamBUS->UnsetDelete($maLoai);

echo "<script>alert('Cập nhật thành công !')</script>";
echo "<script>window.open('?a=10','_self')</script>";