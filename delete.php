
<?php
  include("db.php");  

	$contact =$_REQUEST['contact'];
	

	
$sql = "DELETE FROM user1 WHERE contact = '$contact'";

if (mysqli_query($connection,$sql)) {
    echo "Record deleted successfully";
	header("location:view_all_users.php");
} else {
    echo "Error deleting record: " .mysqli_connect_error();
}


	
	

?>