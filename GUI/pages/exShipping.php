<?php
/**
 * Created by PhpStorm.
 * User: sunsh
 * Date: 07-Dec-18
 * Time: 9:07 PM
 */

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $data =
    [
        'TongTien' => $_SESSION['TongTien'],
        'MaTaiKhoan' => $_SESSION['MaTaiKhoan'],
    ];

    $donDatHang = new DonDatHangBUS();
    $idDDH = $donDatHang->Insert($data);

    if ($idDDH > 0){
        foreach ($_SESSION['GioHang'] as $key=>$value)
        {
            $data2 =
                [
                    'MaDonDatHang' => $idDDH,
                    'MaSanPham' => $key,
                    'SoLuong' => $value['SoLuong'],
                    'GiaSanPham' => $value['Gia']
                ];

            $chiTietDonDatHang = new ChiTietDonDatHangBUS();
            $idCTDDH = $chiTietDonDatHang->Insert($data2);
        }
        unset($_SESSION['GioHang']);
        unset($_SESSION['TongTien']);
        echo "<script>location.href='?h=success'</script>";
    }
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
<!-- end infomation -->