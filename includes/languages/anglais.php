<?php

	function lang($phrase){

		static $lang  = array(


			'Fichier' => 'File',
			'Accual'  => 'Home');

		return $lang[$phrase];

	}
