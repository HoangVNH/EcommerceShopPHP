<div id="main">
    <ol class="breadcrumb">
        <li><a href="?a=1"><i class="fa fa-home"></i> Trang quản trị</a></li>
        <li><a class="active" href="?a=10"><i class="fa fa-grav"></i> Quản lý loại sản phẩm</a></li>
    </ol>
    <div class="col-xs-12">
        <div class="quanlytaikhoan">
            <h3>QUẢN LÝ LOẠI SẢN PHẨM</h3>
            <div class="form-group">
                <a href="new_category.html" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
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
                <th>Mã Loại Sản Phẩm</th>
                <th>Tên Loại Sản Phẩm</th>
                <th>Tác Vụ</th>
            </tr>
            </thead>
            <!-- phần boby -->
            <tbody>
            <tr>
                <td>1</td>
                <td>LSP-001</td>
                <td>Điện Thoại</td>
                <td>
                    <a href="update_category.html">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Loại Tài Khoản"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Loại Tài Khoản"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>LSP-003</td>
                <td>Table</td>
                <td>
                    <a href="update_category.html">
                        <i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Sửa Loại Tài Khoản"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-remove" data-toggle="tooltip" data-placement="top" title="Xóa Loại Tài Khoản"></i>
                    </a>
                </td>
            </tr>

            </tbody>
        </table>

        <p><strong><i class="fa fa-bookmark"></i> Ghi chú: </strong></p>
        <p class="note-items"><i class="fa fa-pencil text-success"></i> Sửa Loại Sản Phẩm.</p>
        <p class="note-items"><i class="fa fa-remove text-danger"></i> Xóa Loại Sản Phẩm.</p>
    </div>
</div>