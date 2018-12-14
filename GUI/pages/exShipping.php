<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $curTime = date('d').date('m').date('Y');

    $ddh = new DonDatHang();
    $donDatHang = new DonDatHangBUS();

    $maDH = "";
    $nums = $donDatHang->GetNumRows();
    if($nums < 2)
    {
        $maDH = $curTime.str_repeat('0', 3).'1';
    }
    else{
        $lstMaDH = $donDatHang->GetMaDonHang();
        foreach ($lstMaDH as $MaDH)
            $maDH = $MaDH;
        $maDH = substr($maDH, 6, 3);
        $maDH += 1;
        $maDH = $curTime.str_repeat('0', 4 - strlen($maDH)).$maDH;
    }

    $ddh->MaDonHang = $maDH;
    $ddh->TongTien = $_SESSION['TongTien'];
    $ddh->MaTaiKhoan = $_SESSION['MaTaiKhoan'];

    // Thêm vào database đơn hàng
    $donDatHang->Insert($ddh);

    $ctddh = new ChiTietDonDatHang();

    foreach ($_SESSION['GioHang'] as $key=>$value)
    {
        $ctddh->MaDonDatHang = $maDH;
        $ctddh->MaSanPham = $key;
        $ctddh->SoLuong = $value['SoLuong'];
        $ctddh->GiaSanPham = $value['Gia'];

        $sanPham = new SanPhamBUS();
        $sanPham->UpdateSoLuongBan($key, $value['SoLuong']);

        $chiTietDonDatHang = new ChiTietDonDatHangBUS();
        $chiTietDonDatHang->Insert($ctddh);
    }
    unset($_SESSION['GioHang']);
    unset($_SESSION['TongTien']);
    echo "<script>location.href='?a=112'</script>";
}

if(isset($_SESSION['MaTaiKhoan']) && isset($_SESSION['TenNguoiDung']))
{
    $maTK = $_SESSION['MaTaiKhoan'];
    $taiKhoanBUS = new TaiKhoanBUS();
    $taiKhoan = new TaiKhoan();
    $row = $taiKhoanBUS->GetInfoByID($maTK);
    $taiKhoan->TenDangNhap = $row[0];
    $taiKhoan->HoTen = $row[1];
    $taiKhoan->NgaySinh = $row[2];
    $taiKhoan->DiaChi = $row[3];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header-top"></div>
        </div>
    </div>
</div>

<!-- infomation -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <nav style="margin-top: 40px;">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"><i class="fa fa-user" style="color: #333; font-weight: 500;"></i> Thông tin giao hàng</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home">
                    <form method="POST" action="">
                        <div class="form-group row" style="margin-top: 30px;">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Họ tên</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" class="form-control thongtin" id="" value="<?php echo $taiKhoan->HoTen ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Điện thoại di động</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" class="form-control thongtin" required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-md-2 col-form-label">Địa chỉ</label>
                            <div class="col-sm-8 col-md-6">
                                <input type="text" class="form-control thongtin"  required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn">Giao đến địa chỉ này</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>