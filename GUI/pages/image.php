<?php

if (!isset($_SESSION))
    session_start();

$des = getcwd().DIRECTORY_SEPARATOR;

require_once ($des . "captcha.php");
$captcha = new Captcha();

// Lưu code vào $_SESSION
$_SESSION['captcha_code'] = $captcha->GetAndShowImage();