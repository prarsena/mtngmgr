<html>
<head>
<title>Topic Database Contents!</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="../library/style.css">
<script type="text/javascript" src="script.js"></script>
</head>

<body>
<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'meetingmanager'); //The Blank string is the password
$ID = mysqli_real_escape_string($connection, $_GET['ID']);
$query = "SELECT * FROM meeting WHERE meeting_id='$ID'"; 
$result = mysqli_query($connection, $query);

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql: " . mysqli_connect_error(); 
}

if($row = mysqli_fetch_array($result)){   
	echo "<h1>Meeting Name: [{$row['meeting_id']}] {$row['name']} </h1>";
	echo "<h1>Date: {$row['date']}</h1>";
	echo "<h1>Host: {$row['host']}</h1>";
} else {
	header('location: view.php'); 
}

mysqli_close($connection); //Make sure to close out the database connection

?>
<h1>Host: <?php echo $row['host'] ?></h1> 
<br>
<form method="post" action="createtopic.php" id="topic">
	<input type="hidden" value="details.php?ID=<?php echo $row['meeting_id'] ?>" />
	<fieldset>
		<div>
			<label for="topic">Topic: </label>
			<input name="topic" id="topic" type="text" value="" />
		</div>
		<div>
			<label for="time">Time Limit:  </label>
			<input name="time" id="time" type="int" value="" />
		</div>
		<div>
			<label for="author">Author:</label>
			<input name="author" id="author" type="text" />
		</div>
	</fieldset>
	<div>
		<input type="submit" value="submit" />
	</div>

	<br> <br>
	<a href="view.php">View meetings</a>
	
<br><br>
<a href="view.php">View all topics</a><br>
<a href="index.php">Submit another topic</a>
</body>
</html>