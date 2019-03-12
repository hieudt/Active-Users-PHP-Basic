<?php 

    include 'include/lib.php';
    include 'include/db.php';
    $error = '';
    $checkActive = 'add-nhanvien';
 ?>
 <?php 
    if (isset($_POST['AddNV'])) {
        $MaNV = !empty($_POST['txtMaNV']) ? $_POST['txtMaNV'] : '';
        $TenNV = !empty($_POST['txtTenNV']) ? $_POST['txtTenNV'] : '';
        $User = !empty($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
        $Pass = !empty($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
        $Email = !empty($_POST['txtEmail']) ? $_POST['txtEmail'] : '';

        if (!$MaNV || !$TenNV || !$User || !$Pass || !$Email)
        {
       
        $error = "<div class=\"alert alert-danger\">
                                Vui Lòng Nhập Đầy Đủ Thông Tin !
                            </div>";
                            
        
        }
        $Pass = md5($Pass);

        if (mysql_num_rows(mysql_query("SELECT * FROM nhanvien WHERE username='$User' Or MaNV = '$MaNV'")) > 0) {
           $error = "<div class=\"alert alert-danger\">
                                Nhân viên này đã tồn tại !
                            </div>";
                          
                         
        }

        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $Email))
        {
            $error = "<div class=\"alert alert-danger\">
                               Email Không Hợp Lệ !
                            </div>";
                       
        }

        if ($error == '') {
            themNhanVien($MaNV,$TenNV,$User,$Pass,$Email);
            $error = "<div class=\"alert alert-success\">
                               Thêm nhân viên thành công !
                            </div>";
        }


    }
 ?>
<?php  include 'pages/header.php' ?>
<body>
     <div id="wrapper">

          <?php 

            include 'pages/nav-header.php';
            include 'pages/right-user.php';
            include 'pages/dropdown.php';
        ?>

          
            <!-- /.navbar-top-links -->

          
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"><br/>
                    <?php echo !empty($error) ? $error : ''; ?>
                    <h1 class="page-header"> Thêm Nhân Viên </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary" style="width: 500px;">
                        <div class="panel-heading">
                            Thêm Mới Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form method="POST" action="add-nhanvien.php">
                            <label>Mã Nhân Viên</label>
                            <input class="form-control" name="txtMaNV"><br/>
                            <label>Tên Nhân Viên</label>
                            <input class="form-control" name="txtTenNV"><br/>
                            <label>Tài Khoản</label>
                            <input class="form-control" name="txtUsername"><br/>
                            <label>Mật Khẩu</label>
                            <input type="password" class="form-control" name="txtPassword">  <br/> 
                            <label>Email</label>
                            <input class="form-control" name="txtEmail">  <br/>    
                            <button type="submit" class="btn btn-primary" name="AddNV">Thêm</button>                    
                        </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
        <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
