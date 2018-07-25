<div class="container">
<nav>
<ul>
<li><a href="add.php">Add Employee</a></li>
	    <li><a href="details.php">Employee Details</a></li>
	    <li><a href="delete.php">Delete Employee details</a></li>
        <li><a href="update.php">Update Employee details</a></li>
		<li><a href="search.php">Search Employee details</a></li>
		<li><a href="logout.php"><font size ="4">Logout</font></a></li> 
</ul>
</nav>
</div>










<style>
body{
margin: 0;
font-family: "sans-serif";
font-weight: 700;
}

.container{
width: 80px;
margin: 0 auto;
}

nav{
float: right;
}

nav ul{
margin: 0;
padding: 0;
life-style: none;
}

nav li{
display: inline-block;
margin-left: 70px;
padding-top: 25px;
position: relative;
}

nav a{
color: #444;
text-decoration: none;
text-transformation: uppercase;
font-size: 14px;
}

nav a hover{
color: #000;
}

nav a::before{
content: '';
display: block;
height: 5px;
width: 0%;
background-color: #444;
position: absolute;
top: 0;
}

nav a hover::before{
width: 100%;
}
</style>















