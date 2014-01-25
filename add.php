<?php
	//header('Content-Type: text/html; charset=utf-8');
	
	$mysqli = new mysqli("projectz-183549.mysql.binero.se", "183549_ks11640", "hannes123", "183549-projectz");
	$mysqli->set_charset("utf8");
	
	$q = "INSERT INTO servers VALUES(
		'$_GET[ip]',
		'$_GET[name]',
		'$_GET[description]'
		)";
	
	$mysqli->query($q);
	$er = $mysqli->error;
	
	if($er == "")
		echo "success";
	else
		echo "error";
?>