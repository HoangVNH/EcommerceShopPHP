<?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $hangSanXuatBUS = new HangSanXuatBUS();
    $row = $hangSanXuatBUS->GetBrandOnId($id);

    $hangSanXuat = new HangSanXuat();
    $hangSanXuat->TenHangSanXuat = $row[0];
    $hangSanXuat->LogoURL = $row[1];

?>

<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=7"><i class="fa fa-flag"></i> Quản lý Hãng Sản Xuất</a></li>
        <li><a class="active" href="#"><i class="fa fa-flag"></i> Sửa thông tin Hãng Sản Xuất</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>SỬA THÔNG TIN HÃNG SẢN XUẤT</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=107" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="edit"/>
            <div class="form-group">
                <label for="masp" class="col-sm-3 control-label ">Mã hãng sản xuất <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input readonly name="mahsx" type="text" value="<?php echo $id ?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Tên hãng sản xuất <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tenhsx" type="text" value="<?php echo $hangSanXuat->TenHangSanXuat ?>" class="form-control" maxlength="30">
                </div>
            </div>

            <div class="form-group" >
                <label class="col-sm-3 control-label">Logo hãng sản xuất <span style="color:red;">*</span></label>
                <div class="col-sm-9 col-sm-offset-3">
                    <div class="col-sm-9">
                        <input name="logourl" type="file" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu mới</button>
                    <a class="btn btn-warning" href="?a=7"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
    </form>
</div>