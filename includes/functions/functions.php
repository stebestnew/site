<?php 
/* function Title*/
function getTitle(){

	global $pageTitle;

	if(isset($pageTitle)){
		echo $pageTitle;
	}else{
		echo 'Default';
	}



}

/* function end Title*/