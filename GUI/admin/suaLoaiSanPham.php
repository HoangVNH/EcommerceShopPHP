<?php
    $maLoai = isset($_GET['id']) ? $_GET['id'] : '';
    $loaiSPBUS = new LoaiSanPhamBUS();
    $loaisp =  $loaiSPBUS->GetOnId($maLoai);
?>

<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="" href="?a=10"><i class="fa fa-grav"></i> Quản lý loại sản phẩm</a></li>
        <li><a class="active" href="#"><i class="fa fa-grav"></i> Sửa thông tin loại sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>SỬA THÔNG TIN LOẠI SẢN PHẨM</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=110" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="edit" />
            <div class="form-group">
                <label for="masp" class="col-sm-3 control-label required">Mã sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input readonly name="malsp" type="text" value="<?php echo $loaisp['MaLoai'] ?>" class="form-control" required maxlength="4">
                </div>
            </div>
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label required">Tên sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tenlsp" id="tenlsp" value="<?php echo $loaisp['TenLoai'] ?>" type="text" class="form-control" required maxlength="64">
                    <span id="availability"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" id="submitBtn" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu mới</button>
                    <a class="btn btn-warning" href="?a=10"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
        </form>

    </div>
</div>