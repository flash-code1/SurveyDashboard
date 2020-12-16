<?php
session_start();
if (isset($_SESSION["MyConF"])) {
	$get_me = $_SESSION["MyConF"];
} else {
$get_me = "";
}
if (isset($_GET["state"])) {
	$state = $_GET["state"];
	if ($_GET["state"] != "all") {
		$Condition = "WHERE StateInterview = '$state' $get_me";
	} else {
		$Condition = "WHERE 1 $get_me";
	}
} else {
	$Condition = "WHERE 1 $get_me";
	$state = "All_State";
}

	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=farmers_data_$state.xls");
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
					<th>Gender</th><br />
					<th>Age Range</th><br />
					<th>MaritalStatus</th><br />
					<th>Education</th><br />
					<th>Formal Education</th><br />
					<th>CropGrown</th><br />
					<th>Household Income Agric. Entrp.</th><br />
					<th>Household Income Other. Entrp.</th><br />
					<th>Cash</th><br />
					<th>FertilizerSpecialBlend</th><br />
					<th>FertilizerNPK</th><br />


					<th>HerbicidePre_EmergencePerLitre</th><br />
					<th>HerbicidePost_EmergencePerLitre</th><br />
					<th>Pesticides</th><br />
					<th>MicroNutrient</th><br />
					<th>CertifiedSeedPerKg</th><br />
					<th>KnapsackSprayer</th><br />
					<th>WaterPump</th><br />
					<th>Clearing Method</th><br />
					<th>Amount Spent on Harvest</th><br />
					<th>Profit Made</th><br />
				</tr><br />
			<tbody><br />
	";
	$query = $con->query("SELECT * FROM `survey_data` $Condition");
	while($row = $query->fetch_array()){
	$output .= "<br />
				<tr><br />
					<td>".$row['SubmissionDate']."</td><br />
					<td>".$row['starttime']."</td><br />
					<td>".$row['endtime']."</td><br />
					<td>".$row['StateInterview']."</td><br />
					<td>".$row['Lga']."</td><br />
					<td>".$row['EMUMERATORNAME']."</td><br />
					<td>".$row['NameOfDataManagementAssistant']."</td><br />
					<td>".$row['NameOfTheBeneficiary']."</td><br />
					<td>".$row['PhoneOfBeneficiary']."</td><br />
					<td>".$row['GENDER']."</td><br />
					<td>".$row['AGERANGE']."</td><br />
					<td>".$row['MaritalStatus']."</td><br />
					<td>".$row['Education']."</td><br />
					<td>".$row['FORMALEDUCATION']."</td><br />
					<td>".$row['CropGrown']."</td><br />
					<td>".$row['AgriculturalEnterprise']."</td><br />
					<td>".$row['OtherEnterprisesSources']."</td><br />
					<td>".$row['CashAmount']."</td><br />
					<td>".$row['FertilizerSpecialBlendNairaValue']."</td><br />
					<td>".$row['FertilizerNPKNairaValue']."</td><br />
					
					<td>".$row['HerbicidePre_EmergencePerLitreNairaValue']."</td><br />
					<td>".$row['HerbicidePost_EmergencePerLitreNairaValue']."</td><br />
					<td>".$row['PesticidesNairaValue']."</td><br />
					<td>".$row['MicronutrientNairaValue']."</td><br />
					<td>".$row['CertifiedSeedPerKgtNairaValue']."</td><br />
					<td>".$row['KnapsackSprayerNairaValue']."</td><br />
					<td>".$row['WaterPumpNairaValue']."</td><br />
					<td>".$row['Methods']."</td><br />
					<td>".number_format($row['muchspentharvest'], 2)."</td><br />
					<td>".$row['myprofit']."</td><br />
				</tr><br />
	";
	}
	$output .="<br />
			</tbody>
		</table><br />
	";
	echo $output;
?><br />
