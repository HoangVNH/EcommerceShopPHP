<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=13"><i class="fa fa-tasks"></i> Quản lý sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ SẢN PHẨM</h3>
            <div class="form-group">
                <a href="?a=14" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
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
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Ngày nhập</th>
                <th>Số lượng tồn</th>
                <th>Số lượng bán</th>
                <th>Lượt xem</th>
                <th>Mô tả</th>
                <th>Xuất xứ</th>
                <th>Mã hãng sản xuất</th>
                <th>Mã loại</th>
                <th>Tên hiển thị</th>
                <th>Bị xoá</th>
                <th>Tác vụ</th>
            </tr>
            </thead>
            <!-- phần boby -->
            <tbody>
            <?php
            $spBUS = new SanPhamBUS();
            $lstSanPham = $spBUS->GetAllByAdmin();
            $i = 1;
            foreach ($lstSanPham as $sanPham) {
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $sanPham->MaSanPham ?></td>
                <td><?php echo $sanPham->TenSanPham ?></td>
                <td><?php echo number_format($sanPham->Gia, 0, ",", ",") ?> </td>
                <td><img class="img-thumbnail rounded" src="<?php echo '../../'. $sanPham->HinhURL ?>" /> </td>
                <td><?php echo substr($sanPham->NgayNhap, 0, 10) ?></td>
                <td><?php echo $sanPham->SoLuongTon ?></td>
                <td><?php echo $sanPham->SoLuongBan ?></td>
                <td><?php echo $sanPham->LuotXem ?></td>
                <td width="25%"><?php echo $sanPham->MoTa ?></td>
                <td><?php echo $sanPham->XuatXu ?></td>
                <td><?php echo $sanPham->MaHangSanXuat ?></td>
                <td><?php echo $sanPham->MaLoai ?></td>
                <td><?php echo $sanPham->TenHienThi ?></td>
                <td><?php echo $sanPham->BiXoa ?></td>
                <td>
                    <a href="?a=15&id=<?php echo $sanPham->MaSanPham ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa sản phẩm"></i>
                    </a>
                    <a href="?a=113&id=<?php echo $sanPham->MaSanPham ?>&d=<?php echo $sanPham->BiXoa ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa sản phẩm"></i>
                    </a>
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
        <p><strong><i class="fa fa-bookmark"></i> Ghi chú: </strong></p>
        <p class="note-items"><i class="fa fa-pencil text-success"></i> Sửa sản phẩm</p>
        <p class="note-items"><i class="fa fa-remove text-danger"></i> Xóa sản phẩm</p>
    </div>
</div>