<?php
$act = isset($_POST['ex']) ? $_POST['ex'] : '';

if ($act == 'edit')
{
    $masp = $_POST['masp'];

    $sanphamBUS = new SanPhamBUS();
    $sp = $sanphamBUS->GetDetailByAdmin($masp);

    $sanPham = new SanPham();

    $sanPham->MaSanPham = $masp;
    $sanPham->TenSanPham = isset($_POST['tensp']) ? $_POST['tensp'] : $sp->TenSanPham;
    $sanPham->Gia = isset($_POST['gia']) ? $_POST['gia'] : $sp->Gia;
    $sanPham->SoLuongTon = isset($_POST['slt']) ? $_POST['slt'] : $sp->SoLuongTon;
    $sanPham->SoLuongBan = isset($_POST['slb']) ? $_POST['slb'] : $sp->SoLuongBan;
    $sanPham->LuotXem = isset($_POST['luotxem']) ? $_POST['luotxem'] : $sp->LuotXem;
    $sanPham->MoTa = isset($_POST['mota']) ? $_POST['mota'] : $sp->MoTa;
    $sanPham->XuatXu = isset($_POST['xuatxu']) ? $_POST['xuatxu'] : $sp->XuatXu;
    $sanPham->MaHangSanXuat = isset($_POST['hsx']) ? $_POST['hsx'] : $sp->MaHangSanXuat;
    $sanPham->MaLoai = isset($_POST['loaisp']) ? $_POST['loaisp'] : $sp->MaLoai;
    $sanPham->TenHienThi = isset($_POST['tenhienthi']) ? $_POST['tenhienthi'] : $sp->TenHienThi;

    if($_FILES['hinhurl']['name'] == '')
    {
        $sanPham->HinhURL = $sp->HinhURL;
    }
    else {
        $mErr = 0;
        $dir = '';
        $myType = '';

        if($sanPham->MaLoai == 1){
            $dir = 'GUI/img/dienthoai/';
            $myType = 'dienthoai';
        }
        else if($sanPham->MaLoai == 2)
        {
            $dir = 'GUI/img/laptop/';
            $myType = 'laptop';
        }
        else if($sanPham->MaLoai == 2){
            $dir = 'GUI/img/tablet/';
            $myType = 'tablet';
        } else {
            $dir = 'GUI/img/dongho/';
            $myType = 'dongho';
        }

        $sanPham->HinhURL = $dir . basename($_FILES['hinhurl']['name']);

        // lấy dường dẫn thư mục hiện tại của file exSanPham.php
        $des = getcwd().DIRECTORY_SEPARATOR;                    // => C:\xampp\htdocs\DoAnWeb\GUI\admin

        $des = substr($des, 0, strlen($des) - 6);   // => C:\xampp\htdocs\DoAnWeb\GUI
        // => C:\xampp\htdocs\DoAnWeb\GUI\img\xxx
        $target_path = $des . "img\\" . $myType . "\\" . basename($_FILES['hinhurl']['name']);

        // kiểm tra nếu kích thước file > 5MB thì báo lỗi
        if($_FILES['hinhurl']['size'] > 500000)
            $chkUpload = 1;

        $imgFileType = strtolower(pathinfo($hangSanXuat->LogoURL, PATHINFO_EXTENSION));

        // kiểm tra nếu địng dạng của file không là jpg || jpeg || png thì báo lỗi
        if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png')
            $chkUpload = 1;

        if($chkUpload == 1){
            echo "<script>alert('Upload ảnh thất bại')</script>";
            echo "<script>window.open('?a=13','_self')</script>";
        } else {
            // upload ảnh vào đường dẫn $target_path
            @move_uploaded_file($_FILES['hinhurl']['tmp_name'], $target_path);
        }
    }

    $sanphamBUS->Update($sanPham);

    echo "<script>alert('Cập nhật thông tin thành công')</script>";
    echo "<script>window.open('?a=13','_self')</script>";

} else {

    $sanPham = new SanPham();

    $sanPham->TenSanPham = isset($_POST['tensp']) ? $_POST['tensp'] : '';
    $sanPham->Gia = isset($_POST['gia']) ? $_POST['gia'] : '';
    $sanPham->SoLuongTon = isset($_POST['slt']) ? $_POST['slt'] : 200;
    $sanPham->SoLuongBan = isset($_POST['slb']) ? $_POST['slb'] : 0;
    $sanPham->LuotXem = isset($_POST['luotxem']) ? $_POST['luotxem'] : 0;
    $sanPham->MoTa = isset($_POST['mota']) ? $_POST['mota'] : '';
    $sanPham->XuatXu = isset($_POST['xuatxu']) ? $_POST['xuatxu'] : '';
    $sanPham->MaHangSanXuat = isset($_POST['hsx']) ? $_POST['hsx'] : '';
    $sanPham->MaLoai = isset($_POST['loaisp']) ? $_POST['loaisp'] : '';
    $sanPham->TenHienThi = isset($_POST['tenhienthi']) ? $_POST['tenhienthi'] : '';

    $mErr = 0;
    $dir = '';
    $myType = '';

    if($sanPham->MaLoai == 1){
        $dir = 'GUI/img/dienthoai/';
        $myType = 'dienthoai';
    }
    else if($sanPham->MaLoai == 2)
    {
        $dir = 'GUI/img/laptop/';
        $myType = 'laptop';
    }
    else if($sanPham->MaLoai == 2){
        $dir = 'GUI/img/tablet/';
        $myType = 'tablet';
    } else {
        $dir = 'GUI/img/dongho/';
        $myType = 'dongho';
    }

    $sanPham->HinhURL = $dir . basename($_FILES['hinhurl']['name']);

    // lấy dường dẫn thư mục hiện tại của file exSanPham.php
    $des = getcwd().DIRECTORY_SEPARATOR;                    // => C:\xampp\htdocs\DoAnWeb\GUI\admin

    $des = substr($des, 0, strlen($des) - 6);   // => C:\xampp\htdocs\DoAnWeb\GUI
    // => C:\xampp\htdocs\DoAnWeb\GUI\img\xxx
    $target_path = $des . "img\\" . $myType . "\\" . basename($_FILES['hinhurl']['name']);

    // kiểm tra nếu kích thước file > 5MB thì báo lỗi
    if($_FILES['hinhurl']['size'] > 500000)
        $mErr = 1;

    $imgFileType = strtolower(pathinfo($sanPham->HinhURL, PATHINFO_EXTENSION));

    // kiểm tra nếu địng dạng của file không là jpg || jpeg || png thì báo lỗi
    if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png')
        $mErr = 1;

    if($mErr == 1) {
        echo "<script>alert('Upload ảnh thất bại')</script>";
        echo "<script>window.open('?a=13','_self')</script>";
    } else {
        // upload ảnh vào đường dẫn $target_path
        @move_uploaded_file($_FILES['hinhurl']['tmp_name'], $target_path);
    }

    $sanphamBUS = new SanPhamBUS();
    $sanphamBUS->Insert($sanPham);

    echo "<script>alert('Tạo mới thành công')</script>";
    echo "<script>window.open('?a=13','_self')</script>";
}