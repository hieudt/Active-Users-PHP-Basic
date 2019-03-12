<?php 

    include 'include/lib.php';
    include 'include/db.php';
    $error = '';
    $checkActive = 'danhmuc-add';
 ?>
 <?php 
    if (isset($_POST['AddLoai'])) {

        $TenLoai = !empty($_POST['txtTenLoai']) ? $_POST['txtTenLoai'] : '';
      
        if (!$TenLoai)
        {
       
        $error = "<div class=\"alert alert-danger\">
                                Vui Lòng Nhập Đầy Đủ Thông Tin !
                            </div>";
                            
        
        }


       

        if ($error == '') {
            themLoaiTB($TenLoai);
            $error = "<div class=\"alert alert-success\">
                               Thêm loại thành công !
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
                    <h1 class="page-header"> Thêm Loại Thiết Bị </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary" style="width: 500px;">
                        <div class="panel-heading">
                            Thêm Mới Loại
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form method="POST" action="danhmuc-add.php">

                            <label>Tên Loại</label>
                            <input class="form-control" name="txtTenLoai"><br/>
  
                            <button type="submit" class="btn btn-primary" name="AddLoai">Thêm</button>                    
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
