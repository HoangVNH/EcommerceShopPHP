<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=10"><i class="fa fa-grav"></i> Quản lý loại sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ LOẠI SẢN PHẨM</h3>
            <div class="form-group">
                <a href="?a=12" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
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
                <th>Mã loại sản phẩm</th>
                <th>Tên loại sản phẩm</th>
                <th>Bị xoá</th>
                <th>Tác vụ</th>
            </tr>
            </thead>
            <!-- phần boby -->
            <tbody>
            <?php
            $loaiSanPhamBUS = new LoaiSanPhamBUS();

            $lstLoaiSanPham = $loaiSanPhamBUS->GetAll();
            $i = 1;
            foreach ($lstLoaiSanPham as $loaiSanPham) {

            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $loaiSanPham->MaLoai ?></td>
                <td><?php echo $loaiSanPham->TenLoai ?></td>
                <td><?php echo $loaiSanPham->BiXoa ?></td>
                <td>
                    <a href="?a=11&id=<?php echo $loaiSanPham->MaLoai ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Loại Tài Khoản"></i>
                    </a>
                    <a href="?a=109&id=<?php echo $loaiSanPham->MaLoai ?>&d=<?php echo $loaiSanPham->BiXoa ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Loại Tài Khoản"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <p><strong><i class="fa fa-bookmark"></i> Ghi chú: </strong></p>
        <p class="note-items"><i class="fa fa-pencil text-success"></i> Sửa loại sản phẩm.</p>
        <p class="note-items"><i class="fa fa-remove text-danger"></i> Xóa loại sản phẩm.</p>
    </div>
</div>