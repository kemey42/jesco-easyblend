<div class="page-header row">
<div class="col">
	<h2 class="mb-0">Existing Program</h2>
</div>
</div>
<hr>

<div class="container">
<div class="row">
	<table class="table table-bordered table-sm">
	<thead class="thead-light">
	<tr>
	<th scope="col">No</th>
	<th scope="col">Date Created</th>
	<th scope="col">Time Created</th>
	<th scope="col">Program Name</th>
	<th scope="col">Last Executed</th>
	<th scope="col">Run</th>
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

$query = "SELECT PRO_ID, PRO_DATE, TIME_FORMAT(PRO_TIME, '%h:%i:%s %p') PRO_TIME, PRO_NAME, PRO_LASTRUN FROM jprogram ORDER BY PRO_ID DESC";
$result = mysqli_query($conn, $query);
if($result){
	$res =  mysqli_fetch_all ($result, MYSQLI_ASSOC);
	//var_dump($res);
	$count=1;
	foreach($res as $item){
		echo "<tr>";
		echo "<td>".$count."</td>";
		echo "<td>".$item['PRO_DATE']."</td>";
		echo "<td>".$item['PRO_TIME']."</td>";
		echo "<td>".$item['PRO_NAME']."</td>";
		echo "<td>".$item['PRO_LASTRUN']."</td>";
		echo "<td><a href=\"index.php?run=true&pid='".$item['PRO_ID']."'\" role=\"button\" class=\"btn btn-success btn-sm btn-block\">View&nbsp;&nbsp;<span class=\"oi oi-dashboard\"></span></a></td>";
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