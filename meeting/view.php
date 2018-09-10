<html>
<head><title>Meeting Database Contents</title>
<link rel="stylesheet" href="../library/style.css">
</head>

<body>
<h1>Meeting Database</h1>
<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'meetingmanager'); //The Blank string is the password
$query = "SELECT * FROM meeting"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql: " . mysqli_connect_error(); 
}

echo '<table>'; 
echo '<th>Meeting Name</th><th>Date</th><th>Organizer</th>';
while($row = mysqli_fetch_array($result)){   
	echo "<tr><td><a href='details.php?ID={$row['meeting_id']}'>" . $row['name'] . "</a></td><td>" . $row['date'] . "</td><td>" . $row['host'] . "</td></tr>";  
}

echo '</table>'; //Close the table in HTML

mysqli_close($connection); //Make sure to close out the database connection
?>
<br><br>
<a href="index.php">Submit new meeting</a>
</body>
</html>