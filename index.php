<?php
	session_start();
	$Nonavbar='';
	$pageTitle='Logo';
	echo "<br>";
	print_r($_SESSION);
	if (isset($_SESSION['session_user'])){
		header('location:dashboard.php');

	}

include 'ini.php';


	/* est ce que utilisateur il pase par formulaire page directe */
	if ($_SERVER['REQUEST_METHOD']=='POST'){

			$user_page=$_POST['txt_user'];
			$pass_page=$_POST['txt_password'];
			$hash_pass_page=sha1($pass_page);
		echo $user_page . ' gg ' . $hash_pass_page ;

						$stmt=$con->prepare("select 
												nom_TB ,password_TB ,ID_user_TB
											from 
												tb_user 
											where 
												nom_TB =? 
											and 
												password_TB =? 
											and 
												group_ID_TB=1
											LIMIT 1");
		$stmt->execute(array($user_page,$hash_pass_page));
		$row=$stmt->fetch();

		

		echo "<br>";
		$count=$stmt->rowcount();


		echo "<br>";
		echo $count;
		echo "<br>";
		if ($count>0){

			$_SESSION['session_user']=$user_page;
			$_SESSION['ID']=$row['ID_user_TB'];
			header('location:dashboard.php');
			exit();



		}

	}




?>


Page Index

<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<input class="form-control" type="text" name="txt_user" placeholder="entre Utilisateur" autocomplete="off"/>
	<input class="form-control" type="password" name="txt_password" placeholder="Mots de Passe" autocomplete="new-password"  />
	<input class="btn btn-primary btn-block" type="submit" value="Login" />
</form>




<?php

include $tpl . 'footer.php';
?>

