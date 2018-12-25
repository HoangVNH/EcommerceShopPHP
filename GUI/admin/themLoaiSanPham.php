<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="" href="?a=10"><i class="fa fa-grav"></i> Quản lý loại sản phẩm</a></li>
        <li><a class="active" href="#"><i class="fa fa-grav"></i> Thêm mới loại sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>THÊM MỚI LOẠI SẢN PHẨM</h3>
        </div>
        <form id="admin-form" class="form-horizontal col-md-12" method="post" action="?a=110" enctype="multipart/form-data" role="form">
            <input type="hidden" name="ex" value="new" />
            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <input name="tenlsp" type="text" class="form-control" id="tenlsp" placeholder="Tên sản phẩm" required maxlength="100">
                    <span id="availability"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" id="submitBtn" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Xác Nhận</button>
                    <a class="btn btn-warning" href="?a=10"><small><i class="fa fa-reply"></i></small> Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>