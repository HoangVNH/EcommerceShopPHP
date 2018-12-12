<?php

if(!isset($_SESSION))
    session_start();

unset($_SESSION['GioHang'][$_POST['id']]);