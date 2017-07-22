<?php
include "controller.php";

session_start();
$controller = new controller();


	if (empty($_SESSION['username'])){
		$controller -> viewLogin();
	}	
	
	elseif (isset($_SESSION['username'])) {
		if (isset($_GET['logout'])){
			$controller->logout();
		}
		
		else{
			$controller->view_admin();
		}
	
	}
	
	elseif($_SESSION['username']!='admin'){
		if (isset($_GET['logout'])){
			$controller->logout();
		}	
		elseif (isset($_GET['home'])){
			$controller->view_home();
		}
		elseif (isset($_GET['tambah'])){
			$controller->haltambah();
		}
		
		elseif (isset($_GET['friend'])){
			$controller->view_friend();
		}
		elseif (isset($_GET['profilpicture'])){
			$controller->view_profilpicture($_GET['profilpicture']);
		}
		elseif(isset($_GET['profilorang'])){
			$controller->view_profil_orang($_GET['profilorang']);
		}
	
	else {
		$controller ->view_index();
	}
		
}
?>
