<html>
<head><title>Topic Database Contents!</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Topic Database</h1>
<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'meetingmanager'); //The Blank string is the password
$query = "SELECT * FROM topic"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql: " . mysqli_connect_error(); 
}

echo '<table>'; 
echo '<th>topic</th><th>time</th><th>author</th><th>notes</th>';
while($row = mysqli_fetch_array($result)){   
	echo "<tr><td><a href='details.php?ID={$row['topic_id']}'>" . $row['topic'] . "</a></td><td>" . $row['time'] . "</td><td>" . $row['author'] . "</td><td>" .$row['notes']."</td></tr>";  
}

echo '</table>'; //Close the table in HTML

mysqli_close($connection); //Make sure to close out the database connection
?>
<br><br>
<a href="index.php">Submit another topic</a>
</body>
</html>