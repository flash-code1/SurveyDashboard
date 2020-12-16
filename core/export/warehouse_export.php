<?php
session_start();
if (isset($_SESSION["MyConW"])) {
	$get_me = $_SESSION["MyConW"];
} else {
$get_me = "";
}
if (isset($_GET["state"])) {
	$state = $_GET["state"];
	if ($_GET["state"] != "all") {
		$Condition = "WHERE StateHeadquarter = '$state' $get_me";
	} else {
		$Condition = "WHERE 1 $get_me";
	}
} else {
	$Condition = "WHERE 1 $get_me";
	$state = "All_State";
}
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=warehousedata_$state.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
    require('../datatable/config.php');
	$output = "";
	$output .="<br />
		<table><br />
			<thead><br />
				<tr><br />
					<th>SubmissionDate</th><br />
					<th>Starttime</th><br />
					<th>Endtime</th><br />
					<th>StateHeadquarter</th><br />
					<th>EnumeratorName</th><br />
					<th>Ward</th><br />
					<th>Transportation</th><br />
					<th>AnimalDrawn</th><br />
					<th>MotorCycle</th><br />
					<th>Tricycle</th><br />
					<th>Cartrucks</th><br />
                    <th>Crops</th><br />
                    
					<th>FarmerDeliveredCotton</th><br />
					<th>MetricTonsCotton</th><br />
					<th>valueCotton</th><br />
					<th>FarmersDeliveredMaize</th><br />
					<th>MetricTonMaize</th><br />
					<th>TotalValueMaize</th><br />
					<th>FarmerDeliveredRice</th><br />
					<th>MerticTonRice</th><br />
					<th>TotalValueRice</th><br />
				</tr><br />
			<tbody><br />
	";
	$query = $con->query("SELECT * FROM `warehouse` $Condition");
	while($row = $query->fetch_array()){
	$output .= "<br />
				<tr><br />
					<td>".$row['SubmissionDate']."</td><br />
					<td>".$row['starttime']."</td><br />
					<td>".$row['endtime']."</td><br />
					<td>".$row['StateHeadquarter']."</td><br />
					<td>".$row['EnumeratorName']."</td><br />
					<td>".$row['Ward']."</td><br />
					<td>".$row['Transportation']."</td><br />
					<td>".$row['AnimalDrawn']."</td><br />
					<td>".$row['MotorCycle']."</td><br />
					<td>".$row['Tricycle']."</td><br />
					<td>".$row['Cartrucks']."</td><br />
                    <td>".$row['Crops']."</td><br />
                    
					<td>".$row['FarmerDeliveredCotton']."</td><br />
					<td>".$row['MetricTonsCotton']."</td><br />
					<td>".$row['valueCotton']."</td><br />
					<td>".$row['FarmersDeliveredMaiza']."</td><br />
					<td>".$row['MetricTonMaize']."</td><br />
					<td>".$row['TotalValueMaize']."</td><br />
					<td>".$row['FarmerDeliveredRice']."</td><br />
					<td>".$row['MerticTonRice']."</td><br />
					<td>".$row['TotalValueRice']."</td><br />
				</tr><br />
	";
	}
	$output .="<br />
			</tbody>
		</table><br />
	";
	echo $output;
?><br />
