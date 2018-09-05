<?php
$connection = mysqli_connect('localhost', 'root', '', 'meetingmanager'); //The Blank string is the password
$query = "SELECT * FROM topic"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection, $query);

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql: " . mysqli_connect_error(); 
}

while ($row = mysqli_fetch_array($result)){
$arr = array('topic_id' => $row['topic_id'], 'author' => $row['author'], 'timer' => $row['time'], 'notes' => $row['notes']);
echo json_encode($arr);
}

mysqli_close($connection);
?>