<?php
include('config.php');
## Merge
session_start();

$_SESSION["MyConW"] = "";
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
	$searchQuery = " and (SubmissionDate like '%".$searchValue."%' or 
	EnumeratorName like'%".$searchValue."%' or Ward like'%".$searchValue."%' or 
	Crops like'%".$searchValue."%' or StateHeadquarter like'%".$searchValue."%') ";
	$_SESSION["MyConW"] = $searchQuery;
}  else {
	$_SESSION["MyConW"] = "";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from `warehouse`");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from `warehouse` WHERE 1 ".$searchQuery."");
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT * FROM `warehouse` WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
	$id = $row["id"];
    $data[] = array(
    		"SubmissionDate"=>$row['SubmissionDate'],
    		"StateHeadquarter"=>$row['StateHeadquarter'],
    		"EnumeratorName"=>$row['EnumeratorName'],
    		"Ward"=>$row['Ward'],
    		"Crops"=>$row['Crops'],
    		"FarmersDeliveredMaiza"=>$row['FarmersDeliveredMaiza'],
    		"MetricTonMaize"=>$row['MetricTonMaize'],
    		"TotalValueMaize"=>$row['TotalValueMaize'],
    		"FarmerDeliveredRice"=>$row['FarmerDeliveredRice'],
    		"MerticTonRice"=>$row['MerticTonRice'],
    		"TotalValueRice"=>$row['TotalValueRice'],
    		"close"=>"<a href='data_single_house.php?id=$id' class='btn btn-pill btn-success btn-air-success btn-success-gradien' type='button'>View More</a>"
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
