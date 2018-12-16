<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="?a=1"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào, <?php echo $_SESSION['TenNguoiDung'] ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="?a=115"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div id="sidebar-bg"></div>
<div id="sidebar" role="navigation">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-th"></i><span> Danh Mục Quản Lý</span>
                <b class="fa fa-plus-sign visible-xs pull-right"></b>
            </h3>
        </div>
        <ul id="menu" class="list-group">
            <li class="list-group-item">
                <a href="?a=2">
                    <i class="fa fa-users"></i> <span> Quản Lý Tài Khoản</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="?a=13">
                    <i class="fa fa-tasks"></i><span> Quản Lý Sản Phẩm</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="?a=10">
                    <i class="fa fa-grav"></i> <span> Quản Lý Loại Sản Phẩm</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="?a=7">
                    <i class="fa fa-flag"></i> <span> Quản Lý Hãng Sản Xuất</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="?a=5">
                    <i class="fa fa-cubes"></i> <span> Đơn Đặt Hàng</span>
                </a>
            </li>
        </ul>
    </div>
</div>