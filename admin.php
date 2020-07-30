
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname="admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	$sql = "INSERT INTO a_name (id, name, password)
	VALUES ('01', 'siddalingeshwar', 'siddaling@99');";
	$sql .= "INSERT INTO a_name (id, name, password)
	VALUES ('02', 'siddaling', '12345');";
	$sql .= "INSERT INTO a_name (id, name, password)
	VALUES ('03', 'siddu', 'siddu')";

	if ($conn->multi_query($sql) === TRUE) {
	    echo "New records created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;

	}

	$name=$_POST['username'];
	$pass=$_POST['password'];

$conn->close();
}

?>