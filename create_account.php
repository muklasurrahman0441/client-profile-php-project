
<?php
	
    // If the values are posted, insert them into the database.
    if (isset($_POST['submit'])){
     include 'db.php';
        	 
         $username = $_POST['username'];
         $email    = $_POST['email'];
		 $contact  = $_POST['contact'];
		 $date     = $_POST['date'];
		 $designation  = $_POST['designation'];
		 $destributor  = $_POST['destributor'];
         $password = $_POST['password'];	 		  
         
 
        $query = "INSERT INTO user1 (username,email,contact,date,designation,destributor,password) VALUES ('$username','$email',' $contact','$date','$designation ','$destributor', '$password'  )";
        //$result = mysqli_query($connection, $query);
        if(mysqli_query($connection, $query)){
            echo "User Created Successfully.";
			
        }else{
           echo "User Registration Failed";
			

        }
    }
	
	
    ?>
	
      

	
	


<!doctype html>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>


body{
	background-image: url("paper.jpg");
}



  
  

</style>

</head>
<body>
<div class = "container">

      <form  method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@name</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		<label for="inputContact" class="sr-only"> Contact</label>
		<input type="text" name="contact" id="inputContact" class="form-control" placeholder="contact" required>
		<label for="" class="sr-only"> Date</label>
		<input type="Date" name="date" id="" class="form-control" placeholder="Date" required>
		<label for="Designation" class="sr-only"> Designation</label>
		<input type="text" name="designation" id="" class="form-control" placeholder="Designation" required>
		<label for="" class="sr-only"> Destributor</label>
		<input type="text" name="destributor" id="" class="form-control" placeholder="destributor" required>
		<label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>



</body>
</html>