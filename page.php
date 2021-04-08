<?php
	
$do=isset($_GET['do']) ? $_GET['do'] : 'Manage';

	if($do=='Manage'){
				echo 'page Manage';
			}elseif($do=='Add'){
				echo 'page Add';

			}elseif($do=='insert'){
				echo 'page Insert';
			}elseif($do=='Update'){
				echo 'page update';
			}elseif($do=='edit'){
				echo 'page Edit';
			}elseif($do=='Delete'){
					echo 'page Delete';
	}else{
		echo 'aucun page acette Nom!!!!!!!!!!!';
	}
