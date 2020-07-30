<?php
$host = "localhost";
$dbusername = "root";
$password = "";
$dbname="register"

// Create connection
 $con = new mysqli($host, $dbusername, $password,$dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{

	echo "Connected successfully";

	$fname=$_POST['first']	
	$lname=$_POST['lirst'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$state=$_POST['state'];

	$stmt = $conn->prepare("INSERT INTO register (fname, lname, gender, email, state) VALUES (?, ?, ?, ?, ? )");
	$stmt->bind_param("sscss", $fname, $lname, $gender, $email,$state);
	echo "data inserted successfully"
}
?>