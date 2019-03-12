<?php 

    include 'include/lib.php';
    include 'include/db.php';
    $nhanvien = danhSachNhanVien();
    $checkActive = 'nhanvien-list';
   

?>
<?php  include 'pages/header.php' ?>
<body>
     <div id="wrapper">

        <?php 

            include 'pages/nav-header.php';
            include 'pages/right-user.php';
            include 'pages/dropdown.php';
        ?>

          

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Danh Sách Nhân Viên </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã Nhân Viên</th>
                                        <th>Tên Nhân Viên</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Thao Tác</th>
                                       
                                    </tr>

                                </thead>
                                <tbody>
                                   <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Xác Nhận Xóa</h4>
                                            </div>
                                        
                                            <div class="modal-body">
                                                <p>Bạn muốn xóa thành viên này ?</p>
                                               
                                                <p class="debug-url"></p>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                                <a class="btn btn-danger btn-ok">Xóa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php foreach ($nhanvien as $nv){ ?>
                                <tr>
                                    <td><?php echo $nv['MaNV']; ?></td>
                                    <td><?php echo $nv['TenNV']; ?></td>
                                    <td><?php echo $nv['username']; ?></td>
                                    <td><?php echo $nv['email']; ?></td>
                                    <td>
                                        
                                            <button type="button" class="btn btn-primary" onclick="window.location = 'nhanvien-edit.php?id=<?php echo $nv['MaNV']; ?>'"/>Sửa</button>
                                            <input type="hidden" name="id" value="<?php echo $nv['MaNV']; ?>"/>
                                                <button class="btn btn-danger" data-href="nhanvien-delete.php?id=<?php echo $nv['MaNV'];?>" data-toggle="modal" data-target="#confirm-delete">
                                                    Xóa
                                                 </button>
                                                 <script>
                                                 $('#confirm-delete').on('show.bs.modal', function(e) {
                                                 $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
                                                 $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
                                                 });
                                                </script>

                                           <!-- <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>Xóa</button> !-->
                                        
                                    </td>
                                </tr>
                                <?php } ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
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
