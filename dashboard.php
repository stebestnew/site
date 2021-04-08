<?php
	session_start();

	echo "<br>";
	print_r($_SESSION);
	if (isset($_SESSION['session_user'])){
		echo 'bienvenu la page de demarage';
		$pageTitle='Dashboard';
		include 'ini.php';

		print_r($_SESSION);

		include $tpl . 'footer.php';
		
	}else{
		header('location:index.php');
			exit();
	}