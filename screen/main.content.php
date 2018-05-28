<div class="jumbotron jumbobg">
<h1 class="display-4">Jesco Easyblend System</h1>
<p class="lead"><?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo 'Today is ' . date('l jS \of F Y') ?></p>
<hr class="my-4">
<p>System last run on: <?php

require 'db.config.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT LOG_TIMESTAMP, PRO_NAME FROM (SELECT max(LOG_TIMESTAMP) LOG_TIMESTAMP, LOG_PRO_ID, PRO_NAME FROM jlog JOIN jprogram ON LOG_PRO_ID = PRO_ID WHERE LOG_CAT = 'end' GROUP BY LOG_PRO_ID ORDER BY LOG_TIMESTAMP DESC) AS MAX_JLOG LIMIT 1";
$result = mysqli_query($conn, $query);
if($result){
	$res =  mysqli_fetch_all ($result, MYSQLI_ASSOC);
	foreach($res as $item){
		echo " ".$item['LOG_TIMESTAMP']." ";
		echo "(Program Name: ".$item['PRO_NAME'].")";
	}
}
?></p>
<p class="lead">
<a class="btn btn-dark btn-lg" href="index.php?create=true" role="button">Start create a new program&nbsp;&nbsp;<span class="oi oi-chevron-right"></span></a>
<a class="btn btn-outline-secondary btn-lg" href="index.php?exists=true" role="button">Run existing program</a>
</p>
</div>