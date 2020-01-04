<html>
<head>  
<style>


 #size6
	  {
	position: absolute;
	top: 6px;      
	left: 20%;
	 position: fixed;
	  }

.SearchBar input {
     height: 30px;
     width: 600px;
	 position: fixed;
	  border-radius: 0;
	  color: #fff;
	  border-width: 3px;
	  border-style: solid;
	  border-color: #1c1c1c;
}

#size10
	  {
	position: absolute;
	top: 6px;      
	left: 65%;
	position: fixed;
	 background: #424242;
	  border-radius: 0;
	  color: #fff;
	  border-width: 3px;
	  border-style: solid;
	  border-color: #1c1c1c;
	  width:70px;
	
	  }
	  
	  #size4
	  {
	position: absolute;
	top: 50px;      
	left: 20%;
	position: fixed;
background:white;
	  }

#header
{

    position: absolute;
	top: 0px;      
	width:100%;
	position: fixed;
	background-image: url("paper.jpg");
}
body{
	background-image: url("paper.jpg");
}
#logout{
	position: absolute;
	top: 0px;      
	left: 72%;
	position: fixed;
	
	  
      border-width: 0.2px;
	  
	 
     
}

</style>


</head>



<body>

<div id ="header">
<form method="post">
<table border="0">
<tr >   
<td  id="size6" class="SearchBar"> 
<input type="text" name="con"  placeholder="Search by contact number"   />  </td>
<td id="size10">  <input type="submit" class="form-control" value="search" name="search" />    </td>
<td id="logout"><h3><button type="button" class="btn btn-outline-success waves-effect"><a href ="logout.php">Logout</button></a></h3></td>
</tr>


</table>

<br><br><br><br><br>
<table border="1" id="size4" >

			<?php
			
			session_start();
			
			if(isset($_POST['search']))
          {	
			
			    include("db.php");
				
				  $contact=$_POST['con'] ;
			
				$sql = "SELECT * FROM user1 WHERE contact = '$contact'";
                $result = mysqli_query($connection, $sql);
			
			
				echo "<tr align='center' >";	
				echo"<td><font color='black'>username</font></td>";
				echo"<td><font color='black'>email</font></td>";
				echo"<td><font color='black'>contact</font></td>";
				echo"<td><font color='black'>date</font></td>";
				echo"<td><font color='black'>designation</font></td>";	
				echo"<td><font color='black'>destributor</font></td>";
                echo"<td><font color='black'>password</font></td>";
				echo"<td> Edit";
				echo"<td> Delete";									
				echo "</tr>";
			
			
			while($test = mysqli_fetch_assoc($result))
			{
				$contact = $test['contact'];	
				echo "<tr align='center'  >";	
				echo"<td><font color='black'>" .$test['username']."</font></td>";
				echo"<td><font color='black'>" .$test['email']."</font></td>";
				echo"<td><font color='black'>". $test['contact']. "</font></td>";
				echo"<td><font color='black'>". $test['date']. "</font></td>";
				echo"<td><font color='black'>". $test['designation']. "</font></td>";	
				echo"<td><font color='black'>". $test['destributor']. "</font></td>";
                echo"<td><font color='black'>". $test['password']. "</font></td>";

				echo"<td> <a href ='edit_profile.php?contact=$contact'>Edit</a>";
				echo"<td> <a href ='delete.php?contact=$contact'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($connection);
			
			}
			
			?>
			</table>

</form>

</div>


<br><br><br><br><br>
<br><br>

<table border="1" cellspacing="5" cellpadding="5" align="center">

<tr>
<td colspan="9" align="center"> <h2>All Users Informations</h2>  </td>

<tr>
	
			<?php
			include("db.php");
			
				$sql = "SELECT * FROM user1";
                $result = mysqli_query($connection, $sql);
			
			
			echo "<tr align='center' >";	
				echo"<td><font color='black'>username</font></td>";
				echo"<td><font color='black'>email</font></td>";
				echo"<td><font color='black'>contact</font></td>";
				echo"<td><font color='black'>date</font></td>";
				echo"<td><font color='black'>designation</font></td>";	
				echo"<td><font color='black'>destributor</font></td>";
                echo"<td><font color='black'>password</font></td>";
				echo"<td> Edit";
				echo"<td> Delete";									
				echo "</tr>";
			
			
			while($test =  mysqli_fetch_assoc($result))
			{
				$contact = $test['contact'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['username']."</font></td>";
				echo"<td><font color='black'>" .$test['email']."</font></td>";
				echo"<td><font color='black'>" .$test['contact']. "</font></td>";
				echo"<td><font color='black'>"  .$test['date']. "</font></td>";
				echo"<td><font color='black'>"  .$test['designation']. "</font></td>";	
				echo"<td><font color='black'>"  .$test['destributor']. "</font></td>";
				echo"<td><font color='black'>"  .$test['password']. "</font></td>";
               

				echo"<td> <a href ='edit_profile.php?contact=$contact'>Edit</a>";
				echo"<td> <a href ='delete.php?contact=$contact'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($connection);
			?>
</table>

</body>

</html>