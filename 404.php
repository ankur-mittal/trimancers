<?php  
	include('smarty/libs/Smarty.class.php');
	$smarty = new Smarty;
	$smarty->assign('title', 'Trimancers | 404');
	$smarty->display('404.tpl');
?>
	
