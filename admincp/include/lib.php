<?php 

function danhSachNhanVien()
{

    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from nhanvien";
     
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    // Mảng chứa kết quả
    $result = array();
   
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysql_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}

function danhSachLoaiThietBi()
{

    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from loaithietbi";
     
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    // Mảng chứa kết quả
    $result = array();
   
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysql_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}
function themLoaiTB($tenLoai)
{
    
    
    // Chống SQL Injection

    $tenLoai = addslashes($tenLoai);

    // Câu truy vấn thêm
    $sql = "
            INSERT INTO loaithietbi (TenLoai) VALUES
            ('$tenLoai')
    ";
     
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    return $query;
}

function demSoNhanVien()
{
    $sql = "select * from nhanvien";
    $query = mysql_query($sql);
    $result = mysql_num_rows($query);
    return $result;
}

function xoaNhanVien($id){
     $sql = "
            DELETE FROM nhanvien
            WHERE MaNV = '$id'
    ";
     
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    return $query;
}

function themNhanVien($MaNV, $TenNV, $username,$password,$email)
{
    
    
    // Chống SQL Injection
    $MaNV = addslashes($MaNV);
    $TenNV = addslashes($TenNV);
    $username = addslashes($username);
    $password = addslashes($password);
    $email = addslashes($email);
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO nhanvien VALUES
            ('$MaNV','$TenNV','$username','$password','$email')
    ";
     
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    return $query;
}

function updateNhanVien($MaNV, $TenNV, $username,$email)
{
    
    
    // Chống SQL Injection
    $MaNV = addslashes($MaNV);
    $TenNV = addslashes($TenNV);
    $username = addslashes($username);
    $email = addslashes($email);
    // Câu truy vấn thêm
    $sql = "
            UPDATE nhanvien SET
            TenNV = '$TenNV',
            username = '$username',
            email = '$email'
            WHERE MaNV = '$MaNV'
    ";
     
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    return $query;
}


 
?>