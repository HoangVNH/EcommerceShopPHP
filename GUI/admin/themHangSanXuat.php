<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=7"><i class="fa fa-flag"></i> Quản lý hãng sản xuất</a></li>
        <li><a class="active" href="#"><i class="fa fa-flag"></i> Thêm mới hãng sản xuất</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>THÊM MỚI HÃNG SẢN XUẤT</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="?a=107" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="new" />
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label ">Tên hãng sản xuất <span style="color:red;">*</span></label>
                <div class="col-sm-9">
                    <input name="tenhsx" type="text" class="form-control" id="tenhsx" placeholder="Tên hãng sản xuất" required maxlength="64">
                    <span id="availability"></span>
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
                    <button type="submit" id="submitBtn" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Xác Nhận</button>
                    <a class="btn btn-warning" href="?a=7"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
        </form>

    </div>
</div>