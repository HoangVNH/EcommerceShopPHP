<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 07-Dec-18
 * Time: 1:15 AM
 */

    $connect = mysqli_connect("localhost", "root", "", "1660214_1660359_1660656_quanlysanpham");
if (isset($_POST["user_name"]))
{
    $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
    $query = "SELECT TenDangNhap FROM taikhoan WHERE TenDangNhap = '" . $username . "'";
    $res = mysqli_query($connect, $query);
    echo mysqli_num_rows($res);
    mysqli_close($connect);
}