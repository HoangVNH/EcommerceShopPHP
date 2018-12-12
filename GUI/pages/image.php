<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 10-Dec-18
 * Time: 11:50 PM
 */

if (!isset($_SESSION))
    session_start();

require_once ("C:/xampp/htdocs/DoAnWeb/GUI/pages/captcha.php");
$captcha = new Captcha();
// Lưu code vào $_SESSION
$_SESSION['captcha_code'] = $captcha->GetAndShowImage();