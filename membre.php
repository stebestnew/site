<?php
	session_start();

	

	if (isset($_SESSION['session_user'])){
		
		$pageTitle='Utilisateur';
		include 'ini.php';
				$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';

	if($do=='Manage'){
				echo 'page Manage';

				}elseif($do=='Add'){

echo "<h1 class='text-center'>Page Ajouter Un Utilisateur </h1>";

?>


			<div class="container">
				<div class="parent">
					<div>1</div>
					<div>2</div>
					<div>3</div>
					<div>4</div>
					<div>5</div>
					<div>6</div>
					<div>7</div>
					<div>8</div>
					<div>9</div>
				</div>





				<Form class="form-horizontal" action="?do=Insert" method="POST">
					
											<!-----STARE UTILISATEUT----->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Utilisateur</label>
						<div class="col-sm-10 col-md-4" >
							<input type="text" name="txt_user" class="form-control"  autocomplete="off"/>
						</div>
					</div>
												<!-----end UTILISATEUT----->

											<!-----STARE Mots de passe----->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Mots de Passe</label>
						<div class="col-sm-10 col-md-4">
							<input type="hidden" name="old_txt_pass" />
							<input type="password" name="new_txt_pass" class="form-control" autocomplete="new-password"/>
						</div>
					</div>
											<!-----end Mots de Passe----->
											<!-----STARE E-mail----->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10 col-md-4">
							<input type="email" name="txt_email" class="form-control"  autocomplete="off" />
						</div>
					</div>
												<!-----end Email----->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Nom Complete</label>
						<div class="col-sm-10 col-md-4">
							<input type="text" name="txt_nom_comp"  class="form-control" autocomplete="off"/>
						</div>
					</div> 



					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Fonction</label>
						<div class="col-sm-10 col-md-4">
							<input type="text" name="txt_fonction"  class="form-control" autocomplete="off"/>
						</div>
					</div>

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Image</label>
						<div class="col-sm-10 col-md-4">
							<input type="file" name="txt_image"  class="form-control"/>
						</div>
					</div>


					<div class="form-group">
						
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" value="Ajouter Utilisateur" class="btn btn-primary btn-lg"/>
						</div>
					</div>

				</Form>
			</div>








<?php




			}elseif($do=='Insert'){



					if($_SERVER['REQUEST_METHOD']=='POST'){

				echo "<h1 class='text-center'>Page Update</h1>";
				echo "<div class='container'>";


						$id  			= $_POST['userID_hidden'];
						$user  			= $_POST['txt_user'];
						$email  		= $_POST['txt_email'];
						$nom_comp  		= $_POST['txt_nom_comp'];
						$function_u  	= $_POST['txt_fonction'];

						     /*echo $id  . $user . $email . $nom_comp . $function_u   ;*/

						$pass=empty($_POST['new_txt_pass']) ? $_POST['old_txt_pass'] : sha1($_POST['new_txt_pass']);
						
						$FromErreur=array();



						if(empty($user)){

							$FromErreur[]= '<div class="alert alert-danger">le champ utilisateur est vide</div>';
						}

						

						if(empty($email)){
						

							$FromErreur[]='<div class="alert alert-danger">le champ E-mail est vide</div>';
						}

						if(empty($nom_comp)){
						

							$FromErreur[]= '<div class="alert alert-danger">le champ Nom est vide</div>';
						}
						if(empty($function_u))
						{

							$FromErreur[]= '<div class="alert alert-danger">le champ Fonction est vide</div>';
						}


						foreach ($FromErreur as $errreur) {
							echo $errreur  ;
						}


						if(empty($FromErreur)){

							$stmt=$con->prepare("UPDATE tb_user SET nom_TB =?,email_TB=?,filname_TB=?,Fonction_user_TB =? ,password_TB=? where ID_user_TB =? ");
       	 $mm=(array($user,$email,$nom_comp,$function_u,$pass,$id));

            		$stmt->execute($mm);
             		echo '<div class="alert alert-success">' . $stmt->rowcount() . ' ' . 'Enregistrement à ete Moddifier avec succés</div>' ;
						}







       

					}else{

						echo 'impossible d ouvrer la page directement';
					}

					echo "</div>";















			}elseif($do=='update'){
				echo "<h1 class='text-center'>Page Update</h1>";
				echo "<div class='container'>";

					if($_SERVER['REQUEST_METHOD']=='POST'){
						$id  			= $_POST['userID_hidden'];
						$user  			= $_POST['txt_user'];
						$email  		= $_POST['txt_email'];
						$nom_comp  		= $_POST['txt_nom_comp'];
						$function_u  	= $_POST['txt_fonction'];

						     /*echo $id  . $user . $email . $nom_comp . $function_u   ;*/

						$pass=empty($_POST['new_txt_pass']) ? $_POST['old_txt_pass'] : sha1($_POST['new_txt_pass']);
						
						$FromErreur=array();



						if(empty($user)){

							$FromErreur[]= '<div class="alert alert-danger">le champ utilisateur est vide</div>';
						}

						

						if(empty($email)){
						

							$FromErreur[]='<div class="alert alert-danger">le champ E-mail est vide</div>';
						}

						if(empty($nom_comp)){
						

							$FromErreur[]= '<div class="alert alert-danger">le champ Nom est vide</div>';
						}
						if(empty($function_u))
						{

							$FromErreur[]= '<div class="alert alert-danger">le champ Fonction est vide</div>';
						}


						foreach ($FromErreur as $errreur) {
							echo $errreur  ;
						}


						if(empty($FromErreur)){

							$stmt=$con->prepare("UPDATE tb_user SET nom_TB =?,email_TB=?,filname_TB=?,Fonction_user_TB =? ,password_TB=? where ID_user_TB =? ");
       	 $mm=(array($user,$email,$nom_comp,$function_u,$pass,$id));

            		$stmt->execute($mm);
             		echo '<div class="alert alert-success">' . $stmt->rowcount() . ' ' . 'Enregistrement à ete Moddifier avec succés</div>' ;
						}







       

					}else{

						echo 'impossible d ouvrer la page directement';
					}

					echo "</div>";





			
			}elseif($do=='Edit'){
				echo  $_GET['userID'];

				$user_m =isset($_GET['userID']) && is_numeric($_GET['userID']) ? $_GET['userID'] : 0 ;
  					echo  $user_m ;



		$stmt=$con->prepare("select * from tb_user where ID_user_TB =? LIMIT 1");

		$stmt->execute(array($user_m));
		$row=$stmt->fetch();
		$count=$stmt->rowcount();


		if ($stmt->rowcount()>0)   //if 1
		{
?>
			   	<h1 class="text-center">Page Utilisateur</h1>

			<div class="container">
				<Form class="form-horizontal" action="?do=update" method="POST">
					<input type="hidden" name="userID_hidden" value="<?php echo $user_m ?>">
											<!-----STARE UTILISATEUT----->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Utilisateur</label>
						<div class="col-sm-10 col-md-4" >
							<input type="text" name="txt_user" class="form-control" value="<?php echo $row['nom_TB'] ?>" autocomplete="off"/>
						</div>
					</div>
												<!-----end UTILISATEUT----->

											<!-----STARE Mots de passe----->
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Mots de Passe</label>
						<div class="col-sm-10 col-md-4">
							<input type="hidden" name="old_txt_pass" value=<?php echo $row['password_TB']?>/>
							<input type="password" name="new_txt_pass" class="form-control" autocomplete="new-password"/>
						</div>
					</div>
											<!-----end Mots de Passe----->
											<!-----STARE E-mail----->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10 col-md-4">
							<input type="email" name="txt_email" class="form-control" value="<?php echo $row['email_TB'] ?>" autocomplete="off" />
						</div>
					</div>
												<!-----end Email----->

					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Nom Complete</label>
						<div class="col-sm-10 col-md-4">
							<input type="text" name="txt_nom_comp" value="<?php echo $row['filname_TB'] ?>" class="form-control" autocomplete="off"/>
						</div>
					</div> 



					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">Fonction</label>
						<div class="col-sm-10 col-md-4">
							<input type="text" name="txt_fonction" value="<?php echo $row['Fonction_user_TB'] ?>" class="form-control" autocomplete="off"/>
						</div>
					</div>



					<div class="form-group">
						
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" value="Mise à Jour" class="btn btn-primary btn-lg"/>
						</div>
					</div>

				</Form>
			</div>
<?php
		}else{  //else 1


		echo 'page nonnnnnnnnnnnn';
	}




		


?>
	

			<?php }elseif($do=='Delete'){
					echo 'page Delete';
	}else{
		echo 'aucun page acette Nom!!!!!!!!!!!';
	}















		include $tpl . 'footer.php';
		
	}else{
		header('location:index.php');
			exit();
	}