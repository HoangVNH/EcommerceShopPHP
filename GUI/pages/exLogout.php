<?php
/*
 * Created by PhpStorm.
 * User: sunsh
 * Date: 07-Dec-18
 * Time: 9:57 AM
 */
if(!isset($_SESSION))
    session_start();

if(isset($_SESSION['TenNguoiDung']))
{
    session_destroy();
    echo "<script>window.open('index.php','_self')</script>";
}