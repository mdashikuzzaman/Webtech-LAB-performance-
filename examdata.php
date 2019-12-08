<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "examdata";


	$conn = new mysqli($answer1,$answer2,$answer3,$answer4,$answer5,$answer6,$answer7,$answer8,$answer9,$answer10);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$answer5 = $_POST['answer5'];
	$answer6 = $_POST['answer6'];
	$answer7 = $_POST['answer7'];
	$answer8 = $_POST['answer8'];
	$answer9 = $_POST['answer9'];
	$answer10 = $_POST['answer10'];


	$sql = "INSERT INTO examdata (answer1,answer2,answer3,answer4,answer5,answer6,answer7,answer8,answer9,answer10)
	VALUES ('$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10')

	if ($conn->query($sql) === TRUE) {
		echo "NEW record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?> 