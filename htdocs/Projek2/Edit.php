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
	
	.edit-form input[type="text"]{
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


<div id="judul" style="margin-left:45%;font-size:30px;"> Edit</div>

<div class="edit-form">
	<form method="POST" action="<?php $this->edituser();?>" >
			<input type="hidden" name="id_user" value="<?php echo $userdata['id_user'];?>"></input>
			<table>
			<tr>
				<td>			
				<label for="User">Username </label>
				</td>
				<td>			
				<input type="text" name="username" value="<?php echo $userdata['username'];?>"></input>
				</td>
			</tr>
			<tr>
					<td>	
					<label for="Password" >Password </label>
					</td>
					<td>
					<input type="text"  name="password" value="<?php echo $userdata['password'];?>"></input>
					</td>
			</tr>
			<tr>
					<td>
					<label for="Email" >Email </label>
					</td>
					<td>
					<input type="text" name="email" value="<?php echo $userdata['email'];?>"></input>
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