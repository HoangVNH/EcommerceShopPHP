<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 11-Dec-18
 * Time: 11:49 AM
 */

if (!isset($_SESSION))
    session_start();

$captcha = isset($_POST['captchacode']) ? $_POST['captchacode'] : false;

$err = array(
    'error' => 'success',
    'captcha' => ''
);

if (!isset($_SESSION['captcha_code']) || $_SESSION['captcha_code'] != trim($captcha))
{
    $err['captcha'] = 'Captcha bạn nhập không đúng';
    $err['error'] = 'error';
}

die(json_encode($err));
