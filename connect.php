<?php
	
	$dns='mysql:host=localhost;dbname=bassatine';
	$user='root';
	$pass='';
	$option= array(


		'PDO ::MYSQL_ATTR_INIT_COMMAND' =>'SET NAMES utf8' , );


		try{
			$con=new PDO($dns,$user,$pass,$option);
			$con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo 'La base est connecte';
		}

		catch (PDOException $e){
			echo 'Base Non Connect' . $e -> getMessage();

		}