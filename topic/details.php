<html>
<head>
<title>Topic Database Contents!</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>
</head>

<body>
<?php
$connection = mysqli_connect('localhost', 'root', 'root', 'meetingmanager'); //The Blank string is the password
$ID = mysqli_real_escape_string($connection, $_GET['ID']);
$query = "SELECT * FROM topic WHERE topic_id='$ID'"; 
$result = mysqli_query($connection, $query);

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql: " . mysqli_connect_error(); 
}

if($row = mysqli_fetch_array($result)){   
	echo "<h1>Topic for Discussion: [{$row['topic_id']}] {$row['topic']} </h1>";
	echo "<h1>Time Limit: {$row['time']} minutes </h1>";
} else {
	header('location: view.php'); 
}

$mins = $row['time'];
$sec = $mins*60;

mysqli_close($connection); //Make sure to close out the database connection

?>
<h1>Author: <?php echo $row['author'] ?></h1> 
<h1>Time: <?php echo $sec ?></h1>
<br>
<div id="display">
Loading timer
</div>
<div id="submitted">

</div>
<script> CountDown(<?php echo $sec ?>,$('#display'))</script>

<form method="post" action="detailsinput.php?ID=<?php echo $ID; ?>" id="notes" >
	<input type="hidden" value="details.php" />
	<fieldset>
		<div>
			<label for="notes">Notes: </label>
			<textarea rows="5" cols="50" name="notes" id="notes" value=""></textarea>
		</div>
	</fieldset>
	<div>
		<input type="submit" value="submit" />
	</div>
</form>	
<br><br>
<a href="view.php">View all topics</a><br>
<a href="index.php">Submit another topic</a>
</body>
</html>