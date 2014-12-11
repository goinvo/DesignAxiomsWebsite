<?php

if( isset($_GET['view']) ){
	$which = $_GET['view'];
	if( isset( $_COOKIE['daview'] ) ){
		$erase = time() - 3600;
		setcookie('daview', '', $erase );
	}
	$_COOKIE['daview'] = $which;
	setcookie('daview', $which, (time() + 3600) );
}
 

?>