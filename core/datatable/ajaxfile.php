<?php
include 'config.php';
## Merge
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($con,$_POST['search']['value']); // Search value

## Search 
$searchQuery = " ";
if($searchValue != '') {
	$searchQuery = " and (NameOfDataManagementAssistant like '%".$searchValue."%' or 
  SubmissionDate like '%".$searchValue."%' or clusterCommunity like '%".$searchValue."%' or 
  EMUMERATORNAME like'%".$searchValue."%' or PhoneOfBeneficiary like'%".$searchValue."%' or 
  GENDER like'%".$searchValue."%' or AGERANGE like'%".$searchValue."%'
  or Funding like'%".$searchValue."%' or StateInterview like '%".$searchValue."%') ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from `survey_data`");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from `survey_data` WHERE 1 ".$searchQuery."");
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT * FROM `survey_data` WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
	$id = $row["id"];
    $data[] = array(
    		"SubmissionDate"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['SubmissionDate']),
    		"StateInterview"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['StateInterview']),
    		"clusterCommunity"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['clusterCommunity']),
    		"EMUMERATORNAME"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['EMUMERATORNAME']),
    		"PhoneOfBeneficiary"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['PhoneOfBeneficiary']),
    		"GENDER"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['GENDER']),
    		"AGERANGE"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['AGERANGE']),
    		"CropGrown"=>preg_replace('/[^a-zA-Z0-9 .-]/','', $row['CropGrown']),
    		"AgriculturalEnterprise"=> preg_replace('/[^a-zA-Z0-9 .-]/','', $row['AgriculturalEnterprise']),
    		"close"=>"<a href='data_single.php?id=$id' class='btn btn-pill btn-success btn-air-success btn-success-gradien' type='button'>View More</a>"
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
