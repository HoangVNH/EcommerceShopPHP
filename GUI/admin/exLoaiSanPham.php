<?php

$act = isset($_POST['ex']) ? $_POST['ex'] : '';
$loaiSPBUS = new LoaiSanPhamBUS();
if ($act == 'edit')
{
    $loaiSanPham = new LoaiSanPham();
    $loaiSanPham->MaLoai = isset($_POST['malsp']) ? $_POST['malsp'] : "";
    $loaiSanPham->TenLoai = isset($_POST['tenlsp']) ? $_POST['tenlsp'] : "";

    $loaiSPBUS->Update($loaiSanPham);

    echo "<script>alert('Cập nhật thành công')</script>";
    echo "<script>window.open('?a=10','_self')</script>";
} else {

    $tenLoai = isset($_POST['tenlsp']) ? $_POST['tenlsp'] : "";

    $loaiSPBUS->Insert($tenLoai);

    echo "<script>alert('Tạo mới thành công')</script>";
    echo "<script>window.open('?a=10','_self')</script>";
}