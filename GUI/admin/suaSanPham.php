<?php
    $spBUS = new SanPhamBUS();
    $maSP = isset($_GET['id']) ? $_GET['id'] : '';
    $sanPham = $spBUS->GetDetailByAdmin($maSP);
?>

<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a href="?a=13"><i class="fa fa-users"></i> Quản lý sản phẩm</a></li>
        <li><a class="active" href="#"><i class="fa fa-users"></i> Sửa thông tin sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>SỬA THÔNG TIN SẢN PHẨM</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=114" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="edit" />
            <div class="form-group">
                <label for="masp" class="col-sm-3 control-label">Mã sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input readonly name="masp" type="text" value="<?php echo $sanPham->MaSanPham ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="tensp" class="col-sm-3 control-label">Tên sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tensp" type="text" value="<?php echo $sanPham->TenSanPham ?>" class="form-control" id="tensp" maxlength="100">
                    <span id="availability"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="gia" class="col-sm-3 control-label">Giá sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="gia" type="text" value="<?php echo $sanPham->Gia ?>" class="form-control" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="slt" class="col-sm-3 control-label">Số lượng tồn <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="slt" type="text" value="<?php echo $sanPham->SoLuongTon ?>" class="form-control" maxlength="4">
                </div>
            </div>
            <div class="form-group">
                <label for="slb" class="col-sm-3 control-label">Số lượng bán <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="slb" type="text" value="<?php echo $sanPham->SoLuongBan ?>" class="form-control" maxlength="4">
                </div>
            </div>
            <div class="form-group">
                <label for="luotxem" class="col-sm-3 control-label">Lượt xem <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="luotxem" type="text" value="<?php echo $sanPham->LuotXem ?>" class="form-control" maxlength="5">
                </div>
            </div>
            <div class="form-group">
                <label for="mota" class="col-sm-3 control-label">Mô Tả <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <textarea name="mota" rows="5" class="form-control" id="content"> <?php echo $sanPham->MoTa ?> </textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="xuatxu" class="col-sm-3 control-label">Xuất xứ <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="xuatxu" type="text" value="<?php echo $sanPham->XuatXu ?>" class="form-control" maxlength="64">
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-sm-3 control-label required">Hãng sản xuất <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control" name="hsx">
                    <?php
                        $hsxBUS = new HangSanXuatBUS();
                        $lstHSX = $hsxBUS->GetAllName();
                        foreach ($lstHSX as $id => $value) {
                    ?>
                            <option value="<?php echo $value->MaHangSanXuat ?>" <?php echo ($value->MaHangSanXuat == $sanPham->MaHangSanXuat) ? 'selected' : '' ?>><?php echo $value->TenHangSanXuat ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-sm-3 control-label required">Loại <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control" name="loaisp">
                        <?php
                        $loaispBUS = new LoaiSanPhamBUS();
                        $lstLoaiSP = $loaispBUS->GetAllName();
                        foreach ($lstLoaiSP as $id => $value) {
                            ?>
                            <option value="<?php echo $value->MaLoai ?>" <?php echo ($value->MaLoai == $sanPham->MaLoai) ? 'selected' : '' ?>><?php echo $value->TenLoai ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Tên hiển thị <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tenhienthi" type="text" value="<?php echo $sanPham->TenHienThi ?>" class="form-control" maxlength="100">
                </div>
            </div>

            <div class="form-group" >
                <label class="col-sm-3 control-label">Hình ảnh<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input name="hinhurl" type="file" class="form-control" accept="image/*">
                    </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" id="submitBtn" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu mới</button>
                    <a class="btn btn-warning" href="?a=13"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
        </form>

    </div>
</div>