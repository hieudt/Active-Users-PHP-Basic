<?php 
    include 'db.php';
    include 'lib.php';
    if (isset($_POST['btnLogin'])) {
      $Users = $_POST['txtUsers'];
      $Passwd = $_POST['txtPasswd'];

      $Users = addslashes($Users);
      $Passwd = addslashes($Passwd);

      $error = "";
      if (UsersAlready($Users,$Passwd) == 0) {
        $error = "<div class=\"alert alert-danger\">
         Kiểm tra lại tài khoản hoặc mật khẩu.
        </div>";
      }

      if (UsersActive($Users) == 1) {
        $error .= "<div class=\"alert alert-danger\">
         Tài Khoản chưa được kích hoạt
        </div>";
      }

      if ($error == "") {
        if (UsersPermission($Users) != 0) {
          echo "Bạn là admin";
        }
        else
        {
          echo "Bạn là mem";
        }
        echo "Success";
      }
    }


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
    <div class="container">
       <?php 
          echo !empty($error) ? $error : "";
        ?>
     <div class="panel panel-primary" style="width: 500px; margin: 0 auto; margin-top:50px;">
       
        <div class="panel-heading">Đăng nhập thành viên</div>
        <div class="panel-body">
        <form action="" method="POST">
          <table border="0" width="300" align="center">
            <tr>
                <td colspan="3">
                    <div class="form-group">
                    <label for="usr">Tên đăng nhập:</label>
                    <input type="text" class="form-control" name="txtUsers">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                  <div class="form-group">
                  <label for="usr">Mật Khẩu:</label>
                  <input type="text" class="form-control" name="txtPasswd">
                  </div> 
                </td> 
            </tr>

            <tr>
              <td colspan="3" align="center">
              <br/>
                <button type="submit" name="btnLogin" class="btn btn-primary btn-md">Đăng nhập</button> 
                <a href="register.php"><button type="button" class="btn btn-primary btn-md">Đăng Ký</button></a>
              </td>
            </tr>
          </table>
          <form>
        </div>
      
    </div>
    </div>
</body>