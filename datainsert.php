<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datainfo";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$name = $_POST['name'];
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO datainfo (name,id,username,password)
	VALUES ('$name','$id','$username','$password')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 