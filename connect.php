<?php
	require_once 'db.config.php';
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($mysqli->connect_error) {
		echo "<div class=\"alert alert-danger\" role=\"alert\">";
		echo "Connect Error: " . $mysqli->connect_error;
		echo "</div>";
		die();
	}
	$result = $mysqli->query("SELECT 'Successful connection!' AS _message FROM DUAL");
	$row = $result->fetch_assoc();
/* 	if($row){
		echo "<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">";
		echo htmlentities($row['_message']);
		echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">";
		echo "<span aria-hidden=\"true\">&times;</span>";
		echo "</button></div>";
	} */


?>