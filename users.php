<?php
include("menu.php");
?>

<div class="main-content">
	<div class="wrapper">
		<h2>User Register</h1>




	<?php
 
        $nameErr  = $user_nameErr = $passwordErr = "";
	if(isset($_POST['submit'])){ 

        if (empty($_POST["full_name"])) {
            $nameErr = "Name is required";
        } elseif(empty($_POST["user_name"])){
            $user_nameErr="User Name is required";
        }elseif(empty($_POST["password"])){
            $passwordErr="Password required";
        }else{


		$fullname= $_POST['full_name'];
		$username= $_POST['user_name'];
		$password= $_POST['password']; 
		
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        $length = strlen ($password);  
  
        if(!preg_match ("/^[a-zA-z]*$/", $fullname) ) {  
        $nameErr = "Only alphabets and whitespace are allowed.";  
                         
            } elseif (!preg_match ($pattern, $username) ){  
            $user_nameErr = "User Name is not valid.";  
            }elseif ( $length < 6 ) {  
            $passwordErr = "Password must have atleat 6 digits";  
           
            }
            
            
             else{
             
		$sql= "INSERT INTO users SET 
		full_name= 	'$fullname',
		user_name= '$username',
		password= '$password'
		"; 
		$result= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if($result==TRUE){ 
			echo "<div class='success'> New User added successfully </div>"; 

 		header("location:".SITEURL."login.php");
        
        
		}
        else{
  	 
		echo "<div class='error'> Failed to add user</div>"; 
		 header("location:".SITEURL."users.php");
		} 
            }
        }
	} 
    

?>


			<br/>
			<br/> 
			 
			
			<form action="" method="POST">
				<table class="tbl-30">
					<tr>
						<td>Full Name:</td>
						<td><input type="text" name="full_name" placeholder="Enter Full Name">
                        <span class="error">* <?php echo $nameErr;?></span>
                        </td>
					
                    </tr>
                     
					<tr> 
						<td>User Name:</td>
						<td>
							<input type="text"   name="user_name" placeholder="Enter User Name">
                                <span class="error">* <?php echo $user_nameErr;?></span>
                    
                        </td>
					</tr>
					<tr>
						<td>Password :</td>
						<td>
							<input type="Password"   name="password" placeholder="Enter your Password">
                                <span class="error">* <?php echo $passwordErr;?></span>
                    
                        </td>
					</tr> 
					<tr>
						<td colspan="2">
							<input type="submit" name="submit" value="Add user" class="btn-add">
						</td>
					</tr>
				</table>
			</form>
		</div>	
	</div>

	 