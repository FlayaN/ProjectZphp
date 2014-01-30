<?php
	//header('Content-Type: text/html; charset=utf-8');
	$return_arr = array();
	
	$mysqli = new mysqli("projectz-183549.mysql.binero.se", "183549_ks11640", "hannes123", "183549-projectz");
	$mysqli->set_charset("utf8");
	
	$q = "";
	if($_GET[field] != "" && $_GET[order] != "")
		$q = "SELECT * FROM servers ORDER BY $_GET[field] $_GET[order]";
	else
		$q = "SELECT * FROM servers";
	
	$result = $mysqli->query($q);
	
	while ($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		$row_array['ip'] = $row['ip'];
		$row_array['name'] = $row['name'];
		$row_array['description'] = $row['description'];
		
		array_push($return_arr,$row_array);
	}
	
	echo json_encode($return_arr);
?>