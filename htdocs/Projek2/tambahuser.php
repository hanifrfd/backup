<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<style>
	.edit-form{
		background-color:white;
		width:auto;
		width:350px;
		margin-left:35%;
		box-sizing: border-box;
		margin-top:10px;
		border-radius:5px;
		padding-top:5px;
	}
	
	
	.edit-form td{
		padding:10px;
		border:0px;
	}
	
	.edit-form input[type="text"],input[type="password"]{
		padding:10px;
		width:200px;
	}
	
	.edit-form input[type="submit"]{
	background-color:#008CC9;
	border: 2px;
	color:white;
	height:30px;
	width:80px;
	float:right;
	}
	
</style>
</head>
<body>
<nav class="navbar">
<div class="judul">My Website</div>
	<ul style="margin-left:40%;">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?report=0">Report</a></li>		
		<?php 		
			echo "<a href='index.php?logout=1'><li class='login'>Logout</li></a>";		
		?>
	</ul>	
</nav>


<div id="judul" style="margin-left:43%;font-size:30px;"> New User</div>
<div class="edit-form">
	<form method="POST" action="<?php $this->tambahuser();  ?>">
			<table>
			<tr>
				<td>			
				<label for="User">Username </label>
				</td>
				<td>			
				<input type="text" name="username" ></input>
				</td>
			</tr>
			<tr>
					<td>	
					<label for="Password" name="password" >Password </label>
					</td>
					<td>
					<input type="password"  name="password" ></input>
					</td>
			</tr>
			<tr>
					<td>
					<label for="Email" name="Email" >Email </label>
					</td>
					<td>
					<input type="text" name="email" ></input>
					</td>
			</tr>
			<tr>
					<td>
					
					</td>
					<td>
					<input style="float:right;" type="submit" value="Save" name="save" >
					</td>
			</tr>
			</table>
	</form>		
</div>

</body>
</html>