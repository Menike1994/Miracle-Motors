<?php

include "access.php";

   $error = "";

  function create_userid()
  {
	  
	  $length = rand(4,20);
	  $number = "";
	  for ($i=0; $i< $length; $i++) {
		  #code...
		  $new_rand = rand(0,9);
		  
		  $number = $number . $new_rand;
	  }
	  return $number;
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST")
  {
	  if(!$DB = new PDO("mysql:host=localhost;dbname=miraclemotors","root",""))
	  {
		  die("could not connect to the database");
	  }
	  
	  /* echo"<pre>";
	  print_r($_POST);
	  echo"</pre>"; */
	  
	  $arr['userid'] = create_userid();
	  $condition = true;
	  while($condition)
	  {
		  $query = "select id from users where userid = :userid limit 1";
	      $stm = $DB->prepare($query);
		  if($stm)
		  {
			  $check = $stm->execute($arr);
			  if($check){
				  $data = $stm->fetchAll(PDO::FETCH_ASSOC);
				  if(is_array($data) && count($data) > 0)
				  {
					  $arr['userid'] = create_userid();
					  continue;
				  }
			  }
		  }
		  $condition = false;
	  }
	  
	   //save to database
	  
	  $arr['Name'] = $_POST ["Name"];
	  $arr['email'] = $_POST['email'];
	  $arr['password'] =  hash('sha1' , $_POST['password']);
	  $arr['level'] = "user";
	  
	  $query = "insert into users (userid,Name,email,password,level) VALUES (:userid,:Name,:email,:password,:level)";	  
	      $stm = $DB->prepare($query);		  
		  if($stm)
		  {			 
			$check = $stm->execute($arr);
			  if(!$check)
			  {
				  $error = "could not save to database";
			  }
			  
			  if($error == "")
			  {
				  header("location: login.php");
				  die;
			  }
		  }
  }

?>


<?php include "header.php"?>	 
    
	
	<?php
	
	if ($error != "")
	{
		echo "<br><span style='color:red'>$error</span><br><br>";
	}
	
	?>
	
	  <style type="text/css">
	  
	  .input{
		  border-radius: 5px;
		  border: solid thin #aaa;
		  padding: 10px;
		  margin: 4px;
		  
	  }
	  
	  .button{
		  border-radius: 5px;
		  border: solid thin #aaa;
		  padding: 10px;
		  margin: 4px;
		  cursor: pointer;
		  
	  }
	  
	  </style>
	<div class="contaner">
		<h1>signup</h1>
		
		<form class="hadow p-3 mb-5 bg-body rounded" method="post">	
			<input type="text" name="Name" placeholder="Name" required> <br>
			<input type="email" name="email" placeholder="email" required> <br>
			<input type="password" name="password" placeholder="password" required> <br>
			
			<br>
			<input class="button" type="submit" value="signup"></br>		
		</form>
	</div>
		
 <?php include "footer.php"?>	