<?php
	
date_default_timezone_set("Asia/Kuala_Lumpur");

$projectname = $_POST['name'];
$arr_data = json_decode($_POST['data']);

require 'db.config.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($projectname){
	$query = "INSERT INTO jprogram (PRO_ID, PRO_NAME, PRO_DATE, PRO_TIME) VALUES (0,'".$projectname."', CURDATE(), NOW())";
	//echo $query;
	$result = mysqli_query($conn, $query);
	if($result){
		//echo "Insert Success";
		$query = "SELECT LPAD(MAX(PRO_ID),4,0) AS PID FROM jprogram";
		//echo $query;
		$result = mysqli_query($conn, $query);
	}
	if($result){
		$res = $result->fetch_assoc();
		if(is_array($arr_data)){
			foreach ($arr_data as $row) {
				$data_array = array();
				foreach($row as $dat){
					array_push($data_array,$dat);
				}
				//var_dump ($data_array);
				$query ="INSERT INTO jdetails (DET_PRO_ID, DET_EQUIPMENT, DET_NUMBER, DET_CONTROL, DET_SEQUENCE, DET_PUMPPARAM) VALUES " . "('".$res["PID"]."','" . implode("','",$data_array)."')";
				$query = str_replace("''","null",$query);
				//echo $query;
				$result = mysqli_query($conn, $query);
			}
		}
		echo json_encode($res["PID"]);
	}
}

$conn->close();

?>