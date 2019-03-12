<?php 

    include 'include/lib.php';
    include 'include/db.php';
    $error = '';
  
 ?>
 <?php 
  $manv = $tennv = $user = $email = '';
    $id = !empty($_GET['id']) ? $_GET['id'] : '';
    if ($id != '') {
       $sql = "SELECT * From nhanvien where MaNV = '$id'";
       $query = mysql_query($sql);
       if ($query) {
           while ($row = mysql_fetch_assoc($query)){
                $manv = $row['MaNV'];
                $tennv = $row['TenNV'];
                $user = $row['username'];
                $email = $row['email'];
            }
       }
    }

    if (isset($_POST['btnUpdate'])) {

        $TenNV = !empty($_POST['txtTenNV']) ? $_POST['txtTenNV'] : '';
        $User = !empty($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
        $Email = !empty($_POST['txtEmail']) ? $_POST['txtEmail'] : '';

        if (!$TenNV || !$User || !$Email)
        {
       
        $error = "<div class=\"alert alert-danger\">
                                Vui Lòng Nhập Đầy Đủ Thông Tin !
                            </div>";
                            
        
        }
        if (mysql_num_rows(mysql_query("SELECT * FROM nhanvien WHERE username='$User'")) > 0) {
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
            updateNhanVien($id,$TenNV,$User,$Email);
            $error = "<div class=\"alert alert-success\">
                               Cập nhật thành công !
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
            include 'pages/dropdown.php'
        ?>

          
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Tổng Quan</a>
                        </li>
                       
                        
                        
                        <li>
                            <a href="#">    &nbsp;<i class="fa fa-user"></i> &nbsp;Nhân Viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="nhanvien-list.php">Danh sách nhân viên</a>
                                </li>
                                <li>
                                    <a href="add-nhanvien.php" class="active">Thêm nhân viên</a>
                                </li>
                                <li>
                                    <a href="#">Khóa Nhân viên <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"><br/>
                    <?php echo !empty($error) ? $error : ''; ?>
                    <h1 class="page-header"> Sửa nhân Viên </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary" style="width: 500px;">
                        <div class="panel-heading">
                            Sửa Nhân Viên
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form method="POST" action="nhanvien-edit.php?id=<?php echo $manv;?>">

                            <label>Tên Nhân Viên</label>
                            <input class="form-control" name="txtTenNV" value="<?php echo $tennv; ?>"><br/>
                            <label>Tài Khoản</label>
                            <input class="form-control" name="txtUsername" value="<?php echo $user; ?>"><br/>
                           
                            <label>Email</label>
                            <input class="form-control" name="txtEmail" value="<?php echo $email; ?>">  <br/>    
                            <button type="submit" class="btn btn-primary" name="btnUpdate">Cập Nhật</button>                    
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
