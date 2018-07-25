<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>login page</title>
</head>
<body style="background-color:#e67e22">

	<div id="main-wrapper">
		<center>
			<h1>login Form</h1>
			<img src="log.png" class="log"/>
		</center>
	
  		<form class="myform" action="main_login.php" method="post">
			<label><b>username:</b></label></br>
			<input name="username" type="text" class="inputvalues" placeholder="type your username"/>
			<label><b>password:</b></label></br>
			<input name="password" type="password" class="inputvalues" placeholder="type your password"/>
			<input name="login" type="submit" id="login_btn" value="login"/></br>
			<a href="sign.php"><input type="button" id="signup_btn" value="signup"/></a>
			
		 <div align="center">
			 <a href="forgot_pass.php">Forgot Password</a> 
		</div> 
		<div align="center">
			 <a href="reset.php">Reset Password</a> 
		</div>
				
		</form>
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
#login_btn{
margin-top:10px;
margin-bottom:10px;
background-color:#27ae60;
padding:5px;
color:white;
width:450px;
text-align:center;
font-size:18px;
font-weight:bold;
}
#signup_btn{
margin-bottom:20px;
background-color:#3498db;
padding:5px;
color:white;
width:100%;
text-align:center;
font-size:18px;
font-weight:bold;

}