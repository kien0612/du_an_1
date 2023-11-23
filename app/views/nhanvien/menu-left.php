<main>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Nhân Viên</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <!-- <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div> -->
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý Tài Khoản
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listtk" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Tài Khoản</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="?act=addtk" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Tài Khoản</p>
                                </a>
                            </li> -->
                        </ul>
                    </li> 
                    <!-- Đơn Hàng
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản lý Đơn Hàng
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listdh" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Đơn Hàng</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=history_don_hang" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lịch Sử Đơn Hàng</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                     Danh Mục -->
                    <!-- <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý Danh Mục
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listdm" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Danh Mục</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=adddm" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Danh Mục</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- Sản Phẩm -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý Sản Phẩm
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listsp" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Sản Phẩm</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=".?act=addsp" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Sản Phẩm</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Bài Viết -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý Bài Viết
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listbv" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Bài Viết</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=addbv" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Bài Viết</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Bình Luận -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý Bình Luận
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listbl" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Bình Luận</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Khuyến Mãi -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý Khuyến Mãi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listkm" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Khuyến Mãi</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href=".?act=addkm" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Khuyến Mãi</p>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <!-- role -->
                    <!-- <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <p>
                                Quản Lý role
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="?act=listrole" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách ROLE</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href=".?act=addrole" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm ROLE</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>