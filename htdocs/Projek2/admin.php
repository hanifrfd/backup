<html>
<head>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<style>
	
	.statuspesan{
		position:absolute;
		top:0px;
		right:10px;
		font-size:15px;
		color:#C9B499;
	}
	#table-user{
		margin-bottom:100px;
	}
	
	#table-user > a{
		text-decoration: none;
	}
	
	#table-user .kols{
		width:100px;
		overflow:hidden;
		
	}
	.submit-e{
		background:url(img/icon/png/garbage.png);
		background-size:20px 20px;
		background-repeat:no-repeat;
		background-color: transparent;
		color:#000000;
		cursor:pointer;
		border:0px;
		width:30px;
		height:40px;
		box-sizing:border-box;
		
		margin:0px 0px 0px 15px;		
	}
	.tambahuser{
		float:left;
		width:150px;		
	}
	.tambahuser:hover > a{
		padding-left:10px;
	}
	
	td a{
		text-decoration: none;
		color:black;
	}
	
	
</style>

</head>
<body>

<nav class="navbar">
<div class="judul">
<img src="img/Iconweb/logo fix sementara.png" width="70" height="70" style="margin-left:50px;"/>
<img src="img/Iconweb/photokopi.png" width="200" height="70" />	
</div>
	<ul style="margin-left:40%;">
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?report=0">Report</a></li>		
		 		
			<a href="index.php?logout=1"><li class='login'><img src="img/Iconweb/logout.png" width="40" height="40" /></li></a>		
	</ul>	
</nav>

<div id="judul"> All User</div>
<div id="table-user">
	
	<table>
		<th>ID</th><th>Username</th><th>Password</th><th>Email</th><th>Tanggal Daftar</th><th>Jumlah Posting</th><th>Edit</th><th>Delete</th>
		<?php
			foreach ($user as $userdata) {				
				$fotoquery=$this->model->hitungsemua_fotouser($userdata['username']);
				$datafoto = $this->model->fetch($fotoquery);				
			?>
		<form method="post" action="<?php $this->adminfunction();?>">
			<input type="hidden" name="id" value="<?php echo $userdata['id_user'];?>" />
		<tr>
			<td><?php echo $userdata['id_user'];?></td>
			<td><?php echo $userdata['username'];?></td>
			<td class="kols"><?php echo $userdata['password'];?></td>
			
			<td class="kol"><?php echo $userdata['email'];?></td>
			<td><?php echo $userdata['tanggal_daftar'];?></td>
			<td><center><a href="index.php?crudfoto=<?php echo $userdata['username'];?>"><?php echo $datafoto['jumlah'];?></a></center></td>
			<td><a href="index.php?edit=<?php echo $userdata['id_user'];?>"> <img src="img/icon/png/edit.png" width="20" height="20" style="margin-left:5px;" /></a></td>
			<td style="height:50px;padding-top: 20px; box-sizing: border-box; "><input class="submit-e" type="submit" name="delete" value=""/></td>
		</tr>
		</form>
		<?php } ?>
	</table>
	<div class="tambahuser" style="margin-top:30px;">
		<a href="index.php?userbaru=0" style="text-decoration: none; color:black;">
			
			<img src="img/icon/svg/avatar.svg" width="50" class="50" style="margin:0px 0px 10px 25px ;"> 
			<br />Tambah User
		</a>
	</div>
	<div class="tambahuser" style="margin-top:30px;">
		<a href="index.php?broadcast=0" style="text-decoration: none; color:black;">			
			<img src="img/Iconweb/broadcast.png" width="90" height="70" class="50" style=""> 
			<br />Broadcast Message
		</a>
	</div>
</div>
<div id="judul" style="margin-top:-17px;"> Report <?php echo $jumlahpesan['jumlah'];?></div>
<div class="report">
	<?php 
	
	foreach ($pesan as $report) 			
	{
		$profilqeury=$this->model->profil_user($report['pengirim']);
		$profildata = $this->model->fetch($profilqeury);		
	?>
	<a class="link" href="index.php?report=<?php echo $report['id_pesan']; ?>">
	<div class="box-report">
		<div class="pp-user">
			<img  class="foto-ppnya" src ="img/<?php echo $profildata['photo']; ?>" width="60px" height="60px" />
		</div>
		<div class="pesan">
			<span><?php echo $report['pengirim']; ?></span>
			<span><?php echo $report['waktu']; ?></span>
			<span>Subject : <?php echo $report['subject']; ?></span>
		</div>
		<div class="statuspesan">			
			<?php echo $report['statuspesan']; ?>		 
		</div>
	</div>
	</a>
		
	<?php } ?>
	
</div>

</body>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(){	
	$('.edits').on("click",function(){	
		$(this).find(".layar").fadeToggle("medium");
	});
	
	

});
	
</script>

</html>
