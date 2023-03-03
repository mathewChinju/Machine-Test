<?php include('menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>User Profile</h1>
     
         <br/><br/>

 <?php
					 

                $id=$_GET['id'];  
				$sql="SELECT * FROM users where id=$id";
 
		 
				$res=mysqli_query($conn,$sql); 
		 
				if($res==true){ 
					$count=mysqli_num_rows($res);

					 
					if($count==1){
						 
						 $row=mysqli_fetch_assoc($res);
						 $full_name=$row['full_name'];
						 $username=$row['user_name']; 
                         $password=$row['password'] ;

					}else{
						 
						header("location:" .SITEURL. "user_profile.php");
					}
				}
                ?>

<form action="" method="POST">
			<table class="tbl-30 text-center">
				<tr>
					<td>Full Name:</td>
					<td>
						<input type="text" name="full_name" value="<?php echo $full_name; ?>">
					</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td>
						<input type="text" name="username"  value="<?php echo $username; ?>">
					</td>
				</tr>
                <tr>
					<td>Password:</td>
					<td>
						<input type="password" name="password"  value="<?php echo $username; ?>">
					</td>
				</tr>
				 
			</table>
		</form> 
    
    </div>
    </div>
     