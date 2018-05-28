<div class="page-header row">
<div class="col">
	<h2 class="mb-0">System Run</h2>
</div>
	<button id="btnStopProgram" type="button" class="btn btn-danger float-right collapse">
	<span class="oi oi-media-stop"></span>&nbsp;&nbsp;Stop</button>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button id="btnRunProgram" type="button" class="btn btn-success float-right">
	<span class="oi oi-media-play"></span>&nbsp;&nbsp;Run</button>
</div>
<hr>

<?php
if (isset($_GET['run'])) {
	$PID = $_GET['pid'];
	echo "<input id=\"ProjectID\" class=\"collapse\" value=\"".$PID."\"></input>";
}

require 'db.config.php';
	
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($PID){
	$query = "SELECT PRO_NAME FROM jprogram WHERE PRO_ID = ".$PID."";
	//echo "<p>".$query."</p>";
	$result = mysqli_query($conn, $query);
	if ($result){
		$res = $result->fetch_assoc();
		$_SESSION['PNAME'] = $res[PRO_NAME];
	}
	//echo "<p>".$_SESSION['PNAME']."</p>";
}
?>

<div class="container">

<div class="row">
<div class="col mb-3">
<div class="progress">
  <div id="progBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
  <span></span>
  </div>
</div>
</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="input-group mb-3">
		<div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon3">Project Name</span>
		</div>
		<input type="text" class="form-control" id="project-name" aria-describedby="basic-addon3" value="<?php echo $_SESSION['PNAME']; ?>" disabled>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="input-group mb-3">
		<div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon3">Start Time</span>
		</div>
		<input type="text" class="form-control" id="start-time" aria-describedby="basic-addon3" disabled>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="input-group mb-3">
		<div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon3">End Time</span>
		</div>
		<input type="text" class="form-control" id="end-time" aria-describedby="basic-addon3" disabled>
		</div>
	</div>
</div>

<div class="row">
	<table class="table table-bordered table-sm">
	<thead class="thead-light">
	<tr>
	<th scope="col">No</th>
	<th scope="col">Equipment</th>
	<th scope="col">Step Sequence</th>
	<th scope="col">Value</th>
	<th scope="col">Unit</th>
	</tr>
	</thead>
	<tbody>
<?php 
if ($PID){
	$query = "SELECT DET_EQUIPMENT, DET_NUMBER, DET_CONTROL, DET_SEQUENCE, DET_PUMPPARAM FROM jdetails WHERE DET_PRO_ID = ".$PID." ORDER BY DET_SEQUENCE, DET_EQUIPMENT, DET_NUMBER";
	//echo "<p>".$query."</p>";
	$result = mysqli_query($conn, $query);
	if($result){
		$res =  mysqli_fetch_all ($result, MYSQLI_ASSOC);
		$count=1;
		foreach($res as $item){
			echo "<tr>";
			echo "<td>".$count."</td>";
			echo "<td>".$item['DET_EQUIPMENT']." ".$item['DET_NUMBER']."</td>";
			echo "<td>".$item['DET_SEQUENCE']."</td>";
			echo "<td>".$item['DET_CONTROL']."</td>";
			echo "<td>".$item['DET_PUMPPARAM']."</td>";
			echo "</tr>";
			$count++;
		}
	}
}	
?>
	</tbody>
	</table>
</div>
</div>