<?php 

	include 'db.php';
	include 'lib.php';
	$list = UsersNotActive();
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng Nhập</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">


    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <style type="text/css">
        


    </style>
</head>
<body>
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Kích Hoạt Thành Viên </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách thành viên chưa được kích hoạt
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="width: 800px;margin: 0 auto;">
                                <thead>
                                    <tr>
                                    	<th>
                                    		Tên tài khoản
                                    	</th>
                                       <th>
                                       		Tình trạng
                                       </th>
                                       <th>
                                       		Thao tác
                                       </th>
                                    </tr>

                                </thead>
                                <tbody>

                                <?php foreach ($list as $acc){ ?>
                                <tr>
                                    <td><?php echo $acc['account']; ?></td>
                                    <td><?php echo 'Chưa kích hoạt' ?></td>
                                    <td>
                                       <a href="kichhoat.php?id=<?php echo $acc['id'] ?>"><button type="button" class="btn btn-primary">Kích hoạt</button></a> 
                                           
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
</body>