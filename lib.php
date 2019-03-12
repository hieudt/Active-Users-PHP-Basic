<?php 

function UsersAlready($users,$password){
	$sql = "SELECT * from users WHERE account = '$users' AND password = '$password'";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) > 0) {
		return 1;
	}
	else
	{
		return 0;
	}
}

function UsersAccAlready($users){
	$sql = "SELECT * from users WHERE account = '$users'";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) > 0) {
		return 1;
	}
	else
	{
		return 0;
	}
}


function UsersActive($users){
	$sql = "SELECT * from users WHERE account = '$users' AND active = 1";
	$query = mysql_query($sql);
	$cayvl = 0;
	if (mysql_num_rows($query) > 0) {
		return 0;
	}
	else
	{
		return 1;
	}
}

function UsersPermission($users){
	$sql = "SELECT * from users WHERE account = '$users' AND rights = 1";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) > 0) {
		return 1;
	}
	else
	{
		return 0;
	}
}

function UsersNotActive()
{


    $sql = "SELECT * FROM users where active = 0";
     

    $query = mysql_query($sql);
     

    $result = array();
   

    if ($query){
        while ($row = mysql_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     

    return $result;
}

function ActiveUsers($id){
	$sql = "UPDATE users set active = 1 where id = '$id'";
	$query = mysql_query($sql);
	return $query;
}


function UsersRegister($users,$password)
{
    
	$sql = "INSERT INTO users (`account`,`password`) VALUES ('{$users}','{$password}')";
	
    // Thực hiện câu truy vấn
    $query = mysql_query($sql);
     
    return $query;
}


?>