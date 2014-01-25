<?php
	//header('Content-Type: text/html; charset=utf-8');
	
	$mysqli = new mysqli("projectz-183549.mysql.binero.se", "183549_ks11640", "hannes123", "183549-projectz");
	$mysqli->set_charset("utf8");
	
	$q = "DELETE FROM servers WHERE ip = '$_GET[ip]'";
	
	$mysqli->query($q);
	
	if($mysqli->affected_rows > 0)
		echo "success";
	else
		echo "failed";
?>