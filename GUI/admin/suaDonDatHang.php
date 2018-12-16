<?php
    $madh = $_GET['mdh'];

    $donHangBUS = new DonDatHangBUS();
    $donHang = new DonDatHang();

    $row = $donHangBUS->GetOrderById($madh);
    $donHang->NgayMua = $row[0];
    $donHang->TongTien = $row[1];
    $donHang->MaTaiKhoan = $row[2];
    $donHang->TinhTrang = $row[3];
?>

<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=5"><i class="fa fa-cubes"></i> Quản lý đơn đặt hàng</a></li>
        <li><a class="active" href="#"><i class="fa fa-cubes"></i> Sửa thông tin đơn đặt hàng</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>SỬA THÔNG TIN ĐƠN ĐẶT HÀNG</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=106" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="edit"/>
            <div class="form-group">
                <label for="type_product" class="col-sm-3 control-label">Mã đơn hàng <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="mddh" readonly type="text" class="form-control" value="<?php echo $madh ?>" required maxlength="30">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Ngày mua <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input readonly type="text" value="<?php echo substr($donHang->NgayMua, 0, 10) ?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Tổng tiền <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tongtien" type="text" value="<?php echo $donHang->TongTien ?>" class="form-control" required maxlength="13">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Mã tài khoản <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <?php
                        $taiKhoanBUS = new TaiKhoanBUS();
                        $lstID = $taiKhoanBUS->GetAllID();
                    ?>
                    <select class="form-control" name="mtk" required>
                        <?php  foreach ($lstID as $id) { ?>
                            <option value="<?php echo $id; ?>" <?php echo ($id ==  $donHang->MaTaiKhoan) ? 'selected' : ''; ?>> <?php echo $id; ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div><div class="form-group">
                <label for="title" class="col-sm-3 control-label required">Tình Trạng <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control" name="tinhtrang">
                        <option value="Đã xác nhận">Đã xác nhận</option>
                        <option value="Đã huỷ">Đã huỷ</option>
                        <option value="Đang vận chuyển">Đang vận chuyển</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu mới</button>
                    <a class="btn btn-warning" href="?a=5"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>