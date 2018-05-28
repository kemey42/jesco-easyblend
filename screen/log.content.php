<div class="page-header row">
<div class="col">
	<h2 class="mb-0">Data Log Record</h2>
</div>
</div>
<hr>

<div class="container">
<div class="row">
	<table class="table table-bordered table-sm">
	<thead class="thead-light">
	<tr>
	<th scope="col">No</th>
	<th scope="col">Time Stamp</th>
	<th scope="col">Program Name</th>
	<th scope="col">Message</th>
	</tr>
	</thead>
	<tbody>
<?php 
require 'db.config.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT LOG_TIMESTAMP, PRO_NAME, LOG_CAT FROM jlog JOIN jprogram ON log_pro_id = pro_id ORDER BY LOG_TIMESTAMP DESC";
$result = mysqli_query($conn, $query);
if($result){
	$res =  mysqli_fetch_all ($result, MYSQLI_ASSOC);
	//var_dump($res);
	$count=1;
	foreach($res as $item){
		
		if ($item['LOG_CAT'] == 'start'){
			$txt = 'System Run';
		} elseif ($item['LOG_CAT'] == 'end'){
			$txt = 'System Stop';
		} else {
			$txt = 'New Program Created';
		}
		
		echo "<tr>";
		echo "<td>".$count."</td>";
		echo "<td>".$item['LOG_TIMESTAMP']."</td>";
		echo "<td>".$item['PRO_NAME']."</td>";
		echo "<td>".$txt."</td>";
		echo "</tr>";
		$count++;
	}
}

$conn->close();

?>
	</tbody>
	</table>
</div>
</div>