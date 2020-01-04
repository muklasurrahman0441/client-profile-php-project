<?php
require("db.php");
$contact =$_REQUEST['contact'];

                 $sql = "SELECT * FROM user1 WHERE contact  = '$contact'";
                 $result = mysqli_query($connection, $sql);


$test = mysqli_fetch_assoc($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		
		           
		
		 $username     = $test['username'];
         $email        = $test['email'];
		 $contact      = $test['contact'];
		 $date         = $test['date'];
		 $designation  = $test['designation'];
		 $destributor  = $test['destributor'];
          	
		
		
				

if(isset($_POST['update']))
{	
	     $username = $_POST['username'];
         $email    = $_POST['email'];
		 $contact  = $_POST['contact'];
		 $date     = $_POST['date'];
		 $designation  = $_POST['designation'];
		 $destributor  = $_POST['destributor'];
         	 	
		

	$sql = "UPDATE user1 SET username ='$username', email ='$email',
		 contact ='$contact',date ='$date',
		 designation ='$designation',destributor ='$destributor'
		 WHERE contact = '$contact'";

		if (mysqli_query($connection,$sql)) {
			 echo ("Updated successfully<br>");
			 header("location: view_all_users.php");
	
		} else {
			echo "Error updating record: " . $connection->error;
		}
	
		
		
}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>update profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  body{
	  background-image:url(employ_edit.jpg);
	 
	  
  }
  
  
  </style>
</head>
<body>

<div class="container">
  <h3>Update profile</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">General</a></li>
    <li class=""><a href="#">Personal</a></li>
    
  </ul>
  
  <div class = "container1">

<form  method="post">
<table>
	<tr>
		<td>USERNAME </td>
		<td><input type="text" name="username" id="defaultRegisterFormName" class="form-control" value="<?php echo $username ?>"/></td>
	    <td> </td>
		<td> </td>
		<td>EMAIL</td>
		<td><input type="email" name="email"  id="defaultRegisterFormEmail" class="form-control" value="<?php echo $email ?>"/></td>
	</tr>
	<tr></tr>
	<tr>
		<td>CONTACT</td>
		<td><input type="text" name="contact" id="defaultRegisterFormContact" class="form-control" value="<?php echo $contact ?>"/></td>
	    <td> </td>
		<td> </td>
		<td>DATE</td>
		<td><input type="date" name="date" id="defaultRegisterFormEmail" class="form-control" value="<?php echo $date ?>"/></td>
	</tr>
	<tr></tr>
	<tr>
		<td>DESIGNATION</td>
		<td><input type="text" name="designation"  id="defaultRegisterFormDesignation" class="form-control" value="<?php echo $designation ?>"/></td>
	    <td> </td>
		<td> </td>
		<td>DESTRIBUTOR</td>
		<td><input type="text" name="destributor" id="defaultRegisterFormDestributor" class="form-control" value="<?php echo $destributor ?>"/></td>
	</tr>
	
		
		
		
	
	<tr>
		<td></td>
		<td> </td>
		<td> </td>
		<td><input type="submit" name="update" class="btn btn-info my-4 btn-block" value="update" /></td>
	</tr>
</table>
</form>
</div>
  <br>
  
</div>

</body>
</html>