<div class="page-header">
	<h5>Test Screen</h5>
</div>
<hr>

<?php
//-------------------param table

echo "<table class=\"table table-bordered table-sm table-hover\">";
echo "<thead><tr><th>Category</th><th>Item</th><th>Mapping</th></tr></thead>";
echo "<tbody>";

    $sql = 'SELECT loo_cat, loo_item, loo_map FROM elookup ORDER BY 1,2';
    foreach ($mysqli->query($sql) as $row) {
	echo "<tr>";
    echo "<td>".$row['loo_cat']."</td>";
    echo "<td>".$row['loo_item']."</td>";
    echo "<td>".$row['loo_map']."</td>";
    echo "</tr>";
    }
	
echo "</tbody>";
echo "</table>";
echo "<p></p>";

//-----------------------param setup table

echo "<table class=\"table table-bordered table-sm table-hover\">";
echo "<thead><tr><th>Category</th>";
    
	$sql = 'SELECT LOO_MAP FROM elookup WHERE LOO_CAT = \'PARAM\' ORDER BY LOO_ITEM';
    foreach ($mysqli->query($sql) as $row) {
    echo "<th>".$row['LOO_MAP']."</th>";
    }
	echo "</tr></thead>";
	echo "<tbody>";

    $sql = 'SELECT LOO_MAP,PAR_1,PAR_2,PAR_3,PAR_4 FROM eparam JOIN elookup ON LOO_ITEM = PAR_ID ORDER BY PAR_ID';
    foreach ($mysqli->query($sql) as $row) {
	echo "<tr>";
    echo "<td>".$row['LOO_MAP']."</td>";
    echo "<td>".$row['PAR_1']."</td>";
    echo "<td>".$row['PAR_2']."</td>";
	echo "<td>".$row['PAR_3']."</td>";
	echo "<td>".$row['PAR_4']."</td>";
    echo "</tr>";
    }
	
echo "</tbody>";
echo "</table>";

?>