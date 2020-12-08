<?php
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=farmersdata.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
    require('../datatable/config.php');
	$output = "";
	$output .="<br />
		<table><br />
			<thead><br />
				<tr><br />
					<th>SubmissionDate</th><br />
					<th>starttime</th><br />
					<th>endtime</th><br />
					<th>StateInterview</th><br />
					<th>Lga</th><br />
					<th>EMUMERATORNAME</th><br />
					<th>NameOfDataManagementAssistant</th><br />
					<th>NameOfTheBeneficiary</th><br />
					<th>PhoneOfBeneficiary</th><br />
				</tr><br />
			<tbody><br />
	";
	$query = $con->query("SELECT * FROM `survey_data`");
	while($fetch = $query->fetch_array()){
	$output .= "<br />
				<tr><br />
					<td>".$fetch['SubmissionDate']."</td><br />
					<td>".$fetch['starttime']."</td><br />
					<td>".$fetch['endtime']."</td><br />
					<td>".$fetch['StateInterview']."</td><br />
					<td>".$fetch['Lga']."</td><br />
					<td>".$fetch['EMUMERATORNAME']."</td><br />
					<td>".$fetch['NameOfDataManagementAssistant']."</td><br />
					<td>".$fetch['NameOfTheBeneficiary']."</td><br />
					<td>".$fetch['PhoneOfBeneficiary']."</td><br />
				</tr><br />
	";
	}
	$output .="<br />
			</tbody>
		</table><br />
	";
	echo $output;
?><br />
