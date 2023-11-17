<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Tài Khoản</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="card card-primary">
            <div style="width: 70%; margin: 0 auto;">
                <div class="left">
                    <div>
                        <label>Họ và Tên</label> <br>
                        <input type="text" style="width: 70%;margin-left: 10%;" placeholder="Nhập họ tên đầy đủ" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày Sinh</label><br>
                        <input type="date" style="width: 20%;margin-left: 10%;" required>
                    </div>
                    <div class="form-group">
                        <label>Giới Tính</label><br>
                        <div style="width: 70%;margin-left: 10%;">
                            <input type="radio" name="gioitinh" id="" checked> Nữ
                            <input type="radio" style="margin-left: 5%;" name="gioitinh" id=""> Nam
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label><br>
                        <input type="number" style="width: 70%;margin-left: 10%;" placeholder="0123*******" required>
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" style="width: 70%;margin-left: 10%;" placeholder="abc123@gmai.com" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label><br>
                        <input type="email" style="width: 70%;margin-left: 10%;" placeholder="Địa chỉ nơi ở" required>
                    </div>
                    <div class="form-group">
                        <label>Role</label><br>
                        <select name="" id="" style="width: 70%;height: 30px;margin-left: 10%;">
                            <option value="0">Admin</option>
                            <option value="0">Nhân Viên</option>
                            <option value="0">Khách Hàng</option>
                        </select>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>

            </div>
        </div>

    </form>

</div>