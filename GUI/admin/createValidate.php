<?php

$connect = mysqli_connect("localhost", "root", "", "1660214_1660359_1660656_quanlysanpham");
if (isset($_POST["user_name"]))
{
    $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
    $query = "SELECT TenDangNhap FROM taikhoan WHERE TenDangNhap = '" . $username . "'";
    $res = mysqli_query($connect, $query);
    echo mysqli_num_rows($res);
    mysqli_close($connect);
} else if (isset($_POST["tenHSX"]))
{
    $tenHSX = mysqli_real_escape_string($connect, $_POST["tenHSX"]);
    $query = "SELECT TenHangSanXuat FROM hangsanxuat WHERE TenHangSanXuat = '" . $tenHSX . "'";
    $res = mysqli_query($connect, $query);
    echo mysqli_num_rows($res);
    mysqli_close($connect);
} else if (isset($_POST['tenloaisp']))
{
    $tenLoaiSP = mysqli_real_escape_string($connect, $_POST["tenloaisp"]);
    $query = "SELECT TenLoai FROM loaisanpham WHERE TenLoai = N'$tenLoaiSP'";
    $res = mysqli_query($connect, $query);
    echo mysqli_num_rows($res);
    mysqli_close($connect);
}