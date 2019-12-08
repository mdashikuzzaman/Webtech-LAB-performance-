<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "datainfo";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM datainfo";
	$result = $conn->query($sql);
	$conn->close();
?> 



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ShowData</title>
</head>
<body>
	<table border="1" style="width:100%" >
		<thead>
			<th>Name</th>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
		</thead>
		<tbody>
			<?php
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo'<tr>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['username'].'</td>';
							echo '<td>'.$row['password'].'</td>';
						echo'</tr>';
					}
				}else {
					echo "No Entry Found!";
				}
			?>
		</tbody>
		
</body>
</html>