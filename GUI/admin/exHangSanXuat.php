<?php

    $act = $_POST['ex'];

    if ($act == 'edit')
    {
        $hangSanXuat = new HangSanXuat();

        $dir = 'GUI/img/logo/';

        $chkUpload = 0;

        $hangSanXuat->MaHangSanXuat = isset($_POST['mahsx']) ? $_POST['mahsx'] : '';
        $hangSanXuat->TenHangSanXuat = isset($_POST['tenhsx']) ? $_POST['tenhsx'] : '';
        $hangSanXuat->LogoURL = $dir . basename($_FILES['logourl']['name']);

        $des = getcwd().DIRECTORY_SEPARATOR;

        $des = substr($des, 0, strlen($des) - 6);
        $target_path = $des . "img\\logo\\" . basename($_FILES['logourl']['name']);

        if(file_exists($target_path))
            $chkUpload = 1;

        if($_FILES['logourl']['size'] > 500000)
            $chkUpload = 1;

        $imgFileType = strtolower(pathinfo($hangSanXuat->LogoURL, PATHINFO_EXTENSION));

        if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png')
            $chkUpload = 1;

        if($chkUpload == 1){
            echo "<script>alert('Upload ảnh thất bại')</script>";
            echo "<script>window.open('?a=7','_self')</script>";
        } else {
            @move_uploaded_file($_FILES['logourl']['tmp_name'], $target_path);

            $hangSanXuatBUS = new HangSanXuatBUS();
            $hangSanXuatBUS->Update($hangSanXuat);

            echo "<script>alert('Cập nhật thông tin thành công')</script>";
            echo "<script>window.open('?a=7','_self')</script>";
        }
    } else {
        $hangSanXuat = new HangSanXuat();

        $dir = 'GUI/img/logo/';

        $chkUpload = 0;

        $hangSanXuat->TenHangSanXuat = isset($_POST['tenhsx']) ? $_POST['tenhsx'] : '';
        $hangSanXuat->LogoURL = $dir . basename($_FILES['logourl']['name']);

        $des = getcwd().DIRECTORY_SEPARATOR;

        $des = substr($des, 0, strlen($des) - 6);
        $target_path = $des . "img\\logo\\" . basename($_FILES['logourl']['name']);

        if(file_exists($target_path))
            $chkUpload = 1;

        if($_FILES['logourl']['size'] > 500000)
            $chkUpload = 1;

        $imgFileType = strtolower(pathinfo($hangSanXuat->LogoURL, PATHINFO_EXTENSION));

        if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png')
            $chkUpload = 1;

        if($chkUpload == 1){
            echo "<script>alert('Upload ảnh thất bại')</script>";
            echo "<script>window.open('?a=8','_self')</script>";
        } else {
            @move_uploaded_file($_FILES['logourl']['tmp_name'], $target_path);

            $hangSanXuatBUS = new HangSanXuatBUS();
            $hangSanXuatBUS->Insert($hangSanXuat);

            echo "<script>alert('Tạo mới thành công')</script>";
            echo "<script>window.open('?a=7','_self')</script>";
        }
    }