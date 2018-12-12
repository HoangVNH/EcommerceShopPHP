<?php
if (!isset($_SESSION))
    session_start();

if (!isset($_SESSION['MaTaiKhoan'])){
    echo "<script>alert('Bạn phải đăng nhập mới có thể sử dụng chức năng này');location.href='?h=signin'</script>";
}

$maSanPham = $_GET['id'];
$sP = new SanPhamBUS();
$sanPham = $sP->GetDetail($maSanPham);

// Kiểm tra nếu tồn tại giỏ hàng thì cập nhật lại
if (!isset($_SESSION['GioHang'][$maSanPham])){
    // tạo mới giỏ hàng
    $_SESSION['GioHang'][$maSanPham]['TenHienThi'] = $sanPham->TenHienThi;
    $_SESSION['GioHang'][$maSanPham]['HinhURL'] = $sanPham->HinhURL;
    $_SESSION['GioHang'][$maSanPham]['Gia'] = $sanPham->Gia;
    $_SESSION['GioHang'][$maSanPham]['SoLuong'] = 1;
} else {
    // cập nhật lại giỏ hàng
    $_SESSION['GioHang'][$maSanPham]['SoLuong'] += 1;
}
echo "<script>alert('Thêm vào giỏ thành công');location.href='?h=cart'</script>";

?>