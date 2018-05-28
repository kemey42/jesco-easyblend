<?php 

$mode = $_POST['mode'];

require 'db.config.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($mode == 1){
	$query = "DELETE FROM jprogram WHERE 1=1";
} elseif ($mode == 2){
	$query = "DELETE FROM jlog WHERE 1=1";
} else {
	$query = '';
};

if($query!=''){
	$result = mysqli_query($conn, $query);
	if($result){
		echo "Deletion Success";
	}
}
?>