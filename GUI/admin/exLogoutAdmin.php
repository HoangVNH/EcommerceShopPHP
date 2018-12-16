<?php

if(!isset($_SESSION))
    session_start();

session_destroy();
echo "<script>window.open('index.php','_self')</script>";