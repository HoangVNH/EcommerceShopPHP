<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=2"><i class="fa fa-users"></i> Quản lý tài khoản</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ TÀI KHOẢN</h3>
            <div class="form-group">
                <a href="?a=4" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
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
                <th>Mã tài khoản</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Loại tài khoản</th>
                <th>Bị xoá</th>
                <th>Tác vụ</th>
            </tr>
            </thead>
            <!-- phần boby -->
            <tbody>
            <?php $taiKhoanBUS = new TaiKhoanBUS();
                 $lstTaiKhoan = $taiKhoanBUS->GetAll();
                 $i = 1;
                 foreach ($lstTaiKhoan as $taiKhoan){
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $taiKhoan->MaTaiKhoan ?></td>
                <td><?php echo $taiKhoan->TenDangNhap ?></td>
                <td><?php echo $taiKhoan->MatKhau ?></td>
                <td><?php echo $taiKhoan->HoTen ?></td>
                <td><?php echo $taiKhoan->NgaySinh ?></td>
                <td><?php echo $taiKhoan->DiaChi ?></td>
                <td><?php echo $taiKhoan->LoaiTaiKhoan ?></td>
                <td><?php echo $taiKhoan->BiXoa ?></td>
                <td>
                    <a href="?a=3&id=<?php echo $taiKhoan->MaTaiKhoan ?>">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Tài Khoản"></i>
                    </a>
                    <a href="?a=104&id=<?php echo $taiKhoan->MaTaiKhoan ?>&d=<?php echo $taiKhoan->BiXoa ?>">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Tài Khoản"></i>
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
        <p class="note-items"><i class="fa fa-pencil text-success"></i> Sửa Tài Khoản.</p>
        <p class="note-items"><i class="fa fa-remove text-danger"></i> Xóa Tài Khoản.</p>
    </div>
</div>