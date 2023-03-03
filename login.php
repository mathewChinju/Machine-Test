<?php include('connection.php'); 
?>


<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login </title>
</head>
<body>
	<div class="login">
	 
		<br/>
  
		<form action="" method="POST" class="text-center">
			User Name:
			<input type="text" name="username" placeholder="Enter Username"/><br/><br/>
			Password:
			<input type="password" name="password" placeholder="Enter Password"/><br/><br/>
			<input type="submit" name="submit"   class="btn-primary">
            
            <a href="<?php echo SITEURL;?>users.php " class="btn-primary"> 
						Register
					</a>


		</form> 
	</div>
</body>
</html>

<?php 



if(isset($_POST['submit'])){

	
	$user_Name= $_POST['username'];
	$password= $_POST['password']; 
	 $sql =" SELECT * FROM users WHERE user_name='$user_Name' AND password='$password'  "; 
    
 
	$res=mysqli_query($conn,$sql); 
 
	if($res==true){  

 		$count=mysqli_num_rows($res);  


		if($count==1){  
            while($row=mysqli_fetch_assoc($res)){
								echo	$id=$row['id'] ;  
        
 	 	 
         
         	echo "<div class='success'>Login Sucess</div>"; 
             
 			header('location:'.SITEURL.'user_profile.php?id=' .$id);
                }
		}else{     
			echo "Login Failed!! Try again ";  
	 		 
			header('location:'.SITEURL.'login.php');

		}
	}

}

?>
