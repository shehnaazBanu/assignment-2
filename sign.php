<?php
	require "config.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>signup page</title>
</head>
<body style="background-color:#95a5a6">

	<div id="main-wrapper">
		<center>
			<h1>Signup Form</h1>
			<img src="log.png" class="log"/>
		</center>
	
  		<form class="myform" action="sign.php" method="post">
			<label><b>username:</label>
			<input name="username" type="text" class="inputvalues" placeholder="type your username" required/></br>
			<label><b>password:</label>
			<input name="password"type="password" class="inputvalues" placeholder="type your password" required/></br>
			<label><b>confirm password:</label>
			<input name="cpassword" type="password" class="inputvalues" placeholder="confirm password" required/></br>
			<input type="submit" id="signup_btn" value="signup"/></br>
			<a href="homepage.php"><input type="button" id="back_btn" value="back"/>
		 
		</form>
		<?php
			if(isset($_post['signup_btn']))
			{
				echo '<script type="text/javascript"> alert("signup button clicked") </script>';
				
				$username = $_post['username'];
				$password = $_post['password'];
				$cpassword = $_post['cpassword'];
				echo $username;
				if($password==$cpassword)
				{
					$query= "select * from signup WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript"> alert (user already exists ....try another username) </script>';
					}
					else
					{
						$query= "insert into signup values('$username','$password')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert (user registered...go to login page to login) </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert (error) </script>';
						}
					}
				}
				else
				{
					echo '<script type="text/javascript"> alert (password does not match) </script>';
				}
			}
			
		?>
	</div>
</body>
</html>
<style>
#main-wrapper{
	width:500px;
	margin: 0 auto;
	background:white;
	padding:5px;
	border-radius:10px;
	border:2px solid #2c3e50;
}
.log{

	width:150px;
	text-align:center;
	border-radius=50%;
}

.myform{
width:450px;
margin:0 auto;
}

.inputvalues{
width:430px;
margin:0 auto;
padding:5px;
}
#signup_btn{
margin-top:10px;
margin-bottom:10px;
background-color:#3498db;
padding:5px;
color:white;
width:450px;
text-align:center;
font-size:18px;
font-weight:bold;
}
#back_btn{
margin-bottom:20px;
background-color:#e74c3c;
padding:5px;
color:white;
width:30%;
text-align:center;
font-size:18px;
font-weight:bold;

}