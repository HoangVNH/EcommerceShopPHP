<div id="main">
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=5"><i class="fa fa-cubes"></i> Quản lý đơn đặt hàng</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ ĐƠN ĐẶT HÀNG</h3>
            <div class="form-group">
                <a href="new_oder.html" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
                <div class="btn-group pull-right" id="">
                    <input id="search" name="search" type="text" value="" class="form-control" placeholder="Tìm kiếm">
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
            <tbody>

            <?php
                $donHangBUS = new DonDatHangBUS();
                $lstDonHang = $donHangBUS->GetAll();
                $i = 1;
                foreach ($lstDonHang as $donHang) {
            ?>
            <tr class="alert">
                <td><?php echo $i ?></td>
                <td><?php echo $donHang->MaDonHang ?></td>
                <td><?php echo $donHang->NgayMua ?></td>
                <td><?php echo $donHang->TongTien ?></td>
                <td><?php echo $donHang->MaTaiKhoan ?></td>
                <td><?php echo $donHang->TinhTrang ?></td>
                <td><?php echo $donHang->BiXoa ?></td>
                <td>
                    <a href="?a=6&mdh=<?php echo $donHang->MaDonHang ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Tài Khoản"></i>
                    </a>
                    <a href="?a=105&mdh=<?php echo $donHang->MaDonHang?>&d=<?php echo $donHang->BiXoa ?>&">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Tài Khoản"></i>
                    </a>

                    <p style="color: red" id="show_message"></p>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <div class="text-right">
            <ul class="pagination" id="step5">
                <li class="disabled"><span>«</span></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>

        <div class="tinhtrang1">
            <p><strong><i class="fa fa-bookmark"></i> Ghi chú: </strong></p>
            <p class="note-items"><i class="fa fa-pencil text-success"></i> Sửa Tài Khoản.</p>
            <p class="note-items"><i class="fa fa-remove text-danger"></i> Xóa Tài Khoản.</p>
            <p class="note-items"><i class="fa fa-minus-circle text-warning"></i> Ẩn Tài Khoản.</p>
        </div>
        <div class="tinhtrang2">
            <p><strong><i class="fa fa-bookmark"></i> Tình Trạng: </strong></p>
            <p style="width: 200px; padding: 15px 0;" class="ghichu text-center alert-success"> Đã Giao Hàng.</p>
            <p style="width: 200px; padding: 15px 0;" class="ghichu text-center alert-danger">Chưa Giao Hàng.</p>
            <p style="width: 200px; padding: 15px 0;" class="ghichu text-center alert-info">Hủy Đơn Hàng.</p>
        </div>
    </div>
</div>
