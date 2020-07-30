<!DOCTYPE html>
<html>
<head>
	<title>intro to php</title>
</head>
<body>
	<h1>this is to display the data</h1>



<?php
$host = "localhost";
$dbusername = "root";
$password = "";
$dbname="test";

// Create connection
$conn = new mysqli($host, $dbusername, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

	$sql = "SELECT* FROM 'imgupload'";
    $result = $conn->query($sql);

	

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	?>
	    	<table>
	    		<tr>
	    			<td><?php echo '<img src="data:img;base64,'.base64_encode($row['img']).'" alt=""image diagram>';?></td>
	    		    <td><?php echo $row['name'];  ?></td>
	    		    <td><?php echo $row['comment'];  ?></td>

	    		</tr>
	    	</table>
	     <?php
	    }
	} else {
	    echo "0 results";
	}

$conn->close();
}
?>
</body>
</html>



