<?php
$data = json_decode(file_get_contents('php://input'), true);

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'employees');

$EmpID='';
if (isset($data['EmpID'])){
	$EmpID = mysqli_real_escape_string($con, $data['EmpID']);
}

$ProjectID='';
if (isset($data['ProjectID'])){
	$ProjectID = mysqli_real_escape_string($con, $data['ProjectID']);
}

$DateFrom='';
if (isset($data['DateFrom'])){
	$DateFrom = mysqli_real_escape_string($con, $data['DateFrom']);
}


$DateTo='';
if (isset($data['DateTo'])){
	$DateTo = mysqli_real_escape_string($con, $data['DateTo']);
}

$N='';
if (isset($data['N'])){
	$N = mysqli_real_escape_string($con, $data['N']);
}




$reg = "INSERT INTO info (EmpID, ProjectID, DateFrom, DateTo, No ) values('$EmpID' , '$ProjectID' ,'$DateFrom' ,'$DateTo' , '$N')";

mysqli_query($con, $reg);
echo "New employee inserted";

    ?>
