<?php

$mData = isset($_POST['obj']) ? $_POST['obj'] : '';
$mLoai = isset($_POST['loai']) ? $_POST['loai'] : '';
$connect = mysqli_connect("localhost", "root", "", "1660214_1660359_1660656_quanlysanpham");
mysqli_set_charset($connect, "utf8");

if ($mLoai == 'sanpham')
{
    $sql = "SELECT MaSanPham, TenSanPham, Gia, HinhURL, NgayNhap, SoLuongTon, SoLuongBan, LuotXem, MoTa, XuatXu, MaHangSanXuat, MaLoai, TenHienThi ,BiXoa FROM sanpham WHERE TenSanPham LIKE N'%$mData%' ";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        while($sanPham = mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $sanPham['MaSanPham'] ?></td>
                <td><?php echo $sanPham['TenSanPham'] ?></td>
                <td><?php echo number_format($sanPham['Gia'], 0, ",", ",") ?> </td>
                <td><img class="img-thumbnail rounded" src="<?php echo '../../'. $sanPham['HinhURL'] ?>" /> </td>
                <td><?php echo substr($sanPham['NgayNhap'], 0, 10) ?></td>
                <td><?php echo $sanPham['SoLuongTon'] ?></td>
                <td><?php echo $sanPham['SoLuongBan'] ?></td>
                <td><?php echo $sanPham['LuotXem'] ?></td>
                <td><?php echo $sanPham['MoTa'] ?></td>
                <td><?php echo $sanPham['XuatXu'] ?></td>
                <td><?php echo $sanPham['MaHangSanXuat'] ?></td>
                <td><?php echo $sanPham['MaLoai'] ?></td>
                <td><?php echo $sanPham['TenHienThi'] ?></td>
                <td><?php echo $sanPham['BiXoa'] ?></td>
                <td>
                    <a href="?a=15&id=<?php echo $sanPham['MaSanPham'] ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa sản phẩm"></i>
                    </a>
                    <a href="?a=113&id=<?php echo $sanPham['MaSanPham'] ?>&d=<?php echo $sanPham['BiXoa'] ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa sản phẩm"></i>
                    </a>
                </td>
            </tr>
        <?php }
    }
} else if ($mLoai == 'donhang') {
    $sql = "SELECT MaDonHang, NgayMua, TongTien, MaTaiKhoan, TinhTrang, BiXoa FROM dondathang WHERE MaDonHang LIKE N'%$mData%' ";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows > 0) {
        $i = 0;
        while ($donHang = mysqli_fetch_array($result)) {

            ?>
            <tr class="alert">
                <td><?php echo $i ?></td>
                <td><?php echo $donHang['MaDonHang'] ?></td>
                <td><?php echo substr($donHang['NgayMua'], 0, 10) ?></td>
                <td><?php echo number_format($donHang['TongTien'], 0, ",", ",") ?> VNĐ</td>
                <td><?php echo $donHang['MaTaiKhoan'] ?></td>
                <td><?php echo $donHang['TinhTrang'] ?></td>
                <td><?php echo $donHang['BiXoa'] ?></td>
                <td>
                    <a href="?a=6&mdh=<?php echo $donHang['MaDonHang'] ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa đơn hàng"></i>
                    </a>
                    <a href="?a=105&mdh=<?php echo $donHang['MaDonHang'] ?>&d=<?php echo $donHang['BiXoa'] ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa đơn hàng"></i>
                    </a>
                </td>
            </tr>
        <?php }
    }
} else if ($mLoai == 'taikhoan') {
    $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, HoTen, NgaySinh, DiaChi, LoaiTaiKhoan, BiXoa FROM taikhoan WHERE TenDangNhap LIKE N'%$mData%'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows > 0) {
        $i = 1;
        while ($taiKhoan = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $taiKhoan['MaTaiKhoan'] ?></td>
                <td><?php echo $taiKhoan['TenDangNhap'] ?></td>
                <td><?php echo $taiKhoan['MatKhau'] ?></td>
                <td><?php echo $taiKhoan['HoTen'] ?></td>
                <td><?php echo $taiKhoan['NgaySinh'] ?></td>
                <td><?php echo $taiKhoan['DiaChi'] ?></td>
                <td><?php echo $taiKhoan['LoaiTaiKhoan'] ?></td>
                <td><?php echo $taiKhoan['BiXoa'] ?></td>
                <td>
                    <a href="?a=3&id=<?php echo $taiKhoan['MaTaiKhoan'] ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Tài Khoản"></i>
                    </a>
                    <a href="?a=104&id=<?php echo $taiKhoan['MaTaiKhoan'] ?>&d=<?php echo $taiKhoan['BiXoa'] ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Tài Khoản"></i>
                    </a>
                </td>
            </tr>
        <?php }
    }
} else if ($mLoai == 'loaisp') {
    $sql = "SELECT MaLoai, TenLoai, BiXoa from loaisanpham WHERE TenLoai LIKE N'%$mData%'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows > 0) {
        $i = 1;
        while ($loaiSanPham = mysqli_fetch_array($result)) {

            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $loaiSanPham['MaLoai'] ?></td>
                <td><?php echo $loaiSanPham['TenLoai'] ?></td>
                <td><?php echo $loaiSanPham['BiXoa'] ?></td>
                <td>
                    <a href="?a=11&id=<?php echo $loaiSanPham['MaLoai'] ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top"
                           title="Sửa loại sản phẩm"></i>
                    </a>
                    <a href="?a=109&id=<?php echo $loaiSanPham['MaLoai'] ?>&d=<?php echo $loaiSanPham['BiXoa'] ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top"
                           title="Xóa loại sản phẩm"></i>
                    </a>
                </td>
            </tr>
        <?php }
    }
} else {
    $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa FROM hangsanxuat WHERE TenHangSanXuat LIKE N'%$mData%'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows > 0) {
        $i = 1;
        while ($hangSanXuat = mysqli_fetch_array($result)) {

            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $hangSanXuat['MaHangSanXuat'] ?></td>
                <td><?php echo $hangSanXuat['TenHangSanXuat'] ?></td>
                <td><img class="img-thumbnail" src="<?php echo '../../' . $hangSanXuat['LogoURL'] ?>"/></td>
                <td><?php echo $hangSanXuat['BiXoa'] ?> </td>
                <td>
                    <a href="?a=9&id=<?php echo $hangSanXuat['MaHangSanXuat'] ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top"
                           title="Sửa hãng sản xuất"></i>
                    </a>
                    <a href="?a=108&id=<?php echo $hangSanXuat['MaHangSanXuat'] ?>&d=<?php echo $hangSanXuat['BiXoa'] ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top"
                           title="Xóa hãng sản xuất"></i>
                    </a>
                </td>
            </tr>
        <?php }
    }
}?>