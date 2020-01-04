<?php
//if($isset($post['submit'])){
	
	
	
	//$uname       =     validate($connection,$post['username']);
	//$password    =     validate($post['password']);
	
	if(isset($_POST['submit'])){
		
		
	include("db.php");

    $uname = mysqli_real_escape_string($connection,$_POST['uname']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connection,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
	


function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	$data = mysqli_real_escape_string($data);
	return $data;
}




?>

<!doctype html>
<html>
<head>
<title>login</title>
<style>
body{
	background-image: url("paper.jpg");
}
.login{
	
  position: absolute;
  left: 40%;
  top: 30%;
  width: 35%;
  text-align: center;
  font-size: 20px;
  
  
}

</style>
</head>
<body>
<div class="login">
<table>
<form method="post" action="">
<tr>
<td> user name</td>
<td><input type="text" name="uname" /></td></br>
</tr>
<tr>
<td> password</td>
<td><input type="text" name="password" /></td>
</tr>
<tr>
<td></td>

<td><input type="submit" name="submit" value="Login"/><input type="reset" name="reset"/></td>

</tr>

<tr>
<td></td>
<td><a href="create_account.php">Do you have any account? Create acount  here</td>
</tr>


</form>
</table>

</div>

</body>
</html>