<?php  
	include('smarty/libs/Smarty.class.php');
	$smarty = new Smarty;
	$smarty->assign('title', 'Trimancers | Home');
	$smarty->display('homepage.tpl');
?>
	
