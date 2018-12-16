<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="" href="?a=13"><i class="fa fa-users"></i> Quản lý sản phẩm</a></li>
        <li><a class="active" href="#"><i class="fa fa-users"></i> Thêm mới sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>THÊM MỚI SẢN PHẨM</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=114" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="new" />
            <div class="form-group">
                <label for="tensp" class="col-sm-3 control-label">Tên sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tensp" type="text" class="form-control" id="tensp" maxlength="100">
                    <span id="availability"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="gia" class="col-sm-3 control-label">Giá sản phẩm <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="gia" type="text" class="form-control" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="slt" class="col-sm-3 control-label">Số lượng tồn <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="slt" type="text" class="form-control" maxlength="4">
                </div>
            </div>
            <div class="form-group">
                <label for="slb" class="col-sm-3 control-label">Số lượng bán <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="slb" type="text" class="form-control" maxlength="4">
                </div>
            </div>
            <div class="form-group">
                <label for="luotxem" class="col-sm-3 control-label">Lượt xem <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="luotxem" type="text" class="form-control" maxlength="5">
                </div>
            </div>
            <div class="form-group">
                <label for="mota" class="col-sm-3 control-label">Mô Tả <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <textarea name="mota" rows="5" class="form-control" id="content"> </textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="xuatxu" class="col-sm-3 control-label">Xuất xứ <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="xuatxu" type="text" class="form-control" maxlength="64">
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
                            <option value="<?php echo $value->MaHangSanXuat ?>"><?php echo $value->TenHangSanXuat ?></option>
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
                            <option value="<?php echo $value->MaLoai ?>"><?php echo $value->TenLoai ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Tên hiển thị <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tenhienthi" type="text" class="form-control" maxlength="100">
                </div>
            </div>

            <div class="form-group" >
                <label class="col-sm-3 control-label">Hình ảnh<span style="color:red;">*</span></label>
                <div class="col-sm-9 col-sm-offset-3">
                    <div class="col-sm-9">
                        <input name="hinhurl" type="file" class="form-control" accept="image/*">
                    </div>
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