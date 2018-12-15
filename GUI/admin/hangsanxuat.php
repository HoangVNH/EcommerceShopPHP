<div id="main">
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=7"><i class="fa fa-flag"></i> Quản lý Hãng Sản Xuất</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ HÃNG SẢN XUẤT</h3>
            <div class="form-group">
                <a href="?a=8" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
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
                <th>Mã hãng sản xuất</th>
                <th>Tên hãng sản xuất</th>
                <th>Logo Hãng</th>
                <th>Bị xoá</th>
                <th>Tác vụ</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $hangSanXuatBUS = new HangSanXuatBUS();
            $lstHSX = $hangSanXuatBUS->GetAll();

            $i = 1;
            foreach ($lstHSX as $hangSanXuat) {
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $hangSanXuat->MaHangSanXuat ?></td>
                <td><?php echo $hangSanXuat->TenHangSanXuat ?></td>
                <td> <img class="img-thumbnail" src="<?php echo '../../'. $hangSanXuat->LogoURL ?>" /> </td>
                <td><?php echo $hangSanXuat->BiXoa ?> </td>
                <td>
                    <a href="?a=9&id=<?php echo $hangSanXuat->MaHangSanXuat ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Hãng Sản Xuất"></i>
                    </a>
                    <a href="?a=108&id=<?php echo $hangSanXuat->MaHangSanXuat ?>&d=<?php echo $hangSanXuat->BiXoa ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Sửa Hãng Sản Xuất"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <p><strong><i class="fa fa-bookmark"></i> Ghi chú: </strong></p>
        <p class="note-items"><i class="fa fa-pencil text-success"></i> Sửa Hãng Sản Xuất.</p>
        <p class="note-items"><i class="fa fa-remove text-danger"></i> Xóa Hãng Sản Xuất.</p>
    </div>
</div>