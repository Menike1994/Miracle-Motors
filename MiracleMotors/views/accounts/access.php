<?php

 function access($level,$redirect = true)

{
	IF(isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$level])
	{
		if($redirect)
		{
		header("Location: denied.php");
		die;
		}
		return false;
	}
	return true;
}

  $_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION['mylevel']) && trim($_SESSION['mylevel']) == "admin";
   
  $_SESSION["ACCESS"]["USER"] = isset($_SESSION['mylevel']) && (trim($_SESSION['mylevel']) == "user" || trim($_SESSION['mylevel']) == "admin" || trim($_SESSION['mylevel']) == "receptionist" || trim($_SESSION['mylevel']) == "accountant");
  
  $_SESSION["ACCESS"]["RECEPTIONIST"] = isset($_SESSION['mylevel']) && (trim($_SESSION['mylevel']) == "receptionist" || trim($_SESSION['mylevel']) == "admin");
  
  $_SESSION["ACCESS"]["ACCOUNTANT"] = isset($_SESSION['mylevel']) && (trim($_SESSION['mylevel']) == "accountant" || trim($_SESSION['mylevel']) == "admin"); 
  


	