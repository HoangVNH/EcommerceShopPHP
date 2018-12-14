<?php
    $act = $_POST['ex'];
    if ($act == 'edit')
    {
        $taiKhoan = new TaiKhoan();
        $taiKhoanBUS = new TaiKhoanBUS();

        $taiKhoan->MaTaiKhoan = $_POST['mtk'];

        $info = $taiKhoanBUS->GetInfoByID($taiKhoan->MaTaiKhoan);
        $taiKhoan->TenDangNhap = isset($_POST['tdn']) ? $_POST['tdn'] : $info['TenDangNhap'];
        $taiKhoan->MatKhau = (isset($_POST['oldpwd']) && isset($_POST['newpwd'])) ? $_POST['newpwd'] : $_POST['oldpwd'];
        $taiKhoan->HoTen = isset($_POST['hoten']) ? $_POST['hoten'] : $info['HoTen'];
        $taiKhoan->NgaySinh = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : $info['NgaySinh'];
        $taiKhoan->DiaChi = isset($_POST['diachi']) ? $_POST['diachi'] : $info['DiaChi'];
        $taiKhoan->LoaiTaiKhoan = isset($_POST['loaitaikhoan']) ? $_POST['loaitaikhoan'] : $info['LoaiTaiKhoan'];
        $taiKhoan->BiXoa = isset($_POST['bixoa']) ? $_POST['bixoa'] : $info['BiXoa'];

        $taiKhoanBUS->UpdateByAdmin($taiKhoan);

        echo "<script>alert('Xoá tài khoản thành công')</script>";
        echo "<script>window.open('?a=2','_self')</script>";
    } else if ($act == 'new'){
        $taiKhoan = new TaiKhoan();
        $taiKhoanBUS = new TaiKhoanBUS();

        $taiKhoan->TenDangNhap = isset($_POST['tdn']) ? $_POST['tdn'] : '';
        $taiKhoan->MatKhau = isset($_POST['matkhau']) ? $_POST['matkhau'] : '';
        $taiKhoan->HoTen = isset($_POST['hoten']) ? $_POST['hoten'] : '';
        $taiKhoan->NgaySinh = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
        $taiKhoan->DiaChi = isset($_POST['diachi']) ? $_POST['diachi'] : '';

        $taiKhoanBUS->Insert($taiKhoan);
        echo "<script>alert('Tạo tài khoản thành công')</script>";
        echo "<script>window.open('?a=2','_self')</script>";
    }

