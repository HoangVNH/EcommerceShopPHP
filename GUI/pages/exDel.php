<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 10-Dec-18
 * Time: 11:35 AM
 */

if(!isset($_SESSION))
    session_start();

$MaSP = $_POST['id'];
unset($_SESSION['GioHang'][$MaSP]);