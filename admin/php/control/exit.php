<?php
if($_GET['page']=='exit'){
	setCookie('autorized','',0,'/');
	header('Location: '.$SITE_CONST['base_path'].'admin/');
}
?>