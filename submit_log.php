<?php 

$pid = $_POST['pid'];
$logCat = $_POST['type'];

require 'db.config.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$query = "INSERT INTO jlog (LOG_ID, LOG_PRO_ID, LOG_CAT, LOG_TIMESTAMP) values (0,".$pid.", '".$logCat."', NOW())";
echo $query;
$result = mysqli_query($conn, $query);
if($result){
	echo "Insert Success";
}

?>