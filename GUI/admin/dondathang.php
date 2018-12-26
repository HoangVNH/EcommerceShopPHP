<div id="main">
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=5"><i class="fa fa-cubes"></i> Quản lý đơn đặt hàng</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ ĐƠN ĐẶT HÀNG</h3>
            <div class="form-group">
                <div class="btn-group pull-right">
                    <input type="text" class="timkiem form-control tim" id="search" placeholder="Tìm kiếm" data-loai="donhang">
                    <span type="submit" class="fa fa-search"></span>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Ngày mua</th>
                <th>Tổng tiền</th>
                <th>Mã tài khoản</th>
                <th>Tình trạng</th>
                <th>Bị xoá</th>
                <th>Tác vụ</th>
            </tr>
            </thead>
            <!-- phần boby -->
            <tbody class="noidung">

            <?php
                $donHangBUS = new DonDatHangBUS();
                $lstDonHang = $donHangBUS->GetAll();
                $i = 1;
                foreach ($lstDonHang as $donHang) {
            ?>
            <tr class="alert">
                <td><?php echo $i ?></td>
                <td><?php echo $donHang->MaDonHang ?></td>
                <td><?php echo substr($donHang->NgayMua, 0, 10) ?></td>
                <td><?php echo number_format($donHang->TongTien, 0, ",", ",") ?> VNĐ</td>
                <td><?php echo $donHang->MaTaiKhoan ?></td>
                <td><?php echo $donHang->TinhTrang ?></td>
                <td><?php echo $donHang->BiXoa ?></td>
                <td>
                    <a href="?a=6&mdh=<?php echo $donHang->MaDonHang ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa đơn hàng"></i>
                    </a>
                    <a href="?a=105&mdh=<?php echo $donHang->MaDonHang?>&d=<?php echo $donHang->BiXoa ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa đơn hàng"></i>
                    </a>

                    <p style="color: red" id="show_message"></p>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <div class="tinhtrang2">
            <p><strong><i class="fa fa-bookmark"></i> Tình Trạng: </strong></p>
            <p style="width: 200px; padding: 15px 0;" class="ghichu text-center alert-success"> Đã Giao Hàng.</p>
            <p style="width: 200px; padding: 15px 0;" class="ghichu text-center alert-danger">Chưa Giao Hàng.</p>
            <p style="width: 200px; padding: 15px 0;" class="ghichu text-center alert-info">Hủy Đơn Hàng.</p>
        </div>
    </div>
</div>
