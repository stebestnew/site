<?php

		include 'connect.php';
		echo '<br>';
		
		$tpl='includes/templates/';
		$css='layout/css/';
		$js='layout/js/';
		$lang='includes/languages/';
		$func='includes/functions/';
		include $func . 'functions.php';
		include $lang . 'anglais.php';
		include $tpl . 'header.php';

		if(!isset($Nonavbar)){include $tpl . 'navbar.php';}
		

