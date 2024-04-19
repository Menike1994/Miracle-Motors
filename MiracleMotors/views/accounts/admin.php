<?php

session_start();

include "access.php";
access('ADMIN');

include "header.php";

?>

	 
    <h1>This is the admin page</h1>
	
 <?php include "footer.php"?>	