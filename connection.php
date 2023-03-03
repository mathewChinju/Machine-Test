<?php 

define('SITEURL','http://localhost/polus_test/'); 
define('LOCALHOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'polusdb');

$conn=mysqli_connect( LOCALHOST,USERNAME,PASSWORD, DATABASE) or die('Connection Failed'.mysqli_error());
	 
 		 
	?>