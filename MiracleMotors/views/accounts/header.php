
<!--DOCTYPE html>
<html>
<head>
      <title>Home</title>
</head>

     <style type ="text/css">
	 
	     body{
			 font-family: verdana;
			 font-size: 13px;
		 }
	 
	     header{
			 height: 30px;
			 padding; 10px;
			 background-color: black;
			 color: white;
			 
		 }
		 
		    header a{
				color: white;
				text-decoration: none;
			}
		</style>	 
			 
	<body>		 
			 
			 
     <header><a href="index.php">Home</a> . <a href="admin.php">admin</a> . <a href="receptionist.php">receptionist</a> . <a href="acc.php">accountant</a> . <a href="login.php">Login</a> . <a href="signup.php">Signup</a> . <a href="logout.php">logout</a> </header>
	 
	 <span><--?php
	
	if(isset($_SESSION['myname']))
	{
	  echo "Hi, " . $_SESSION['myname'];
	}
	?>	
	
	</span-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Miracle Motors</title>
</head>
<body>
	<div class="container text-center">
		<ul class="nav nav-pills">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Dashboard</a>
		</li>		
		<li class="nav-item">
			<a class="nav-link" href="admin.php">Admin</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="acc.php">Accountant</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="receptionist.php">Receptionist</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="login.php">Login</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="signup.php">Sign Up</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="logout.php">Log Out</a>
		</li>
		<?php
			
			if(isset($_SESSION['myname']))
			{
			echo "Loged as, " . $_SESSION['myname'];
			}
			?>	
			</a>
		</li>
		</ul>
	</div>
    
