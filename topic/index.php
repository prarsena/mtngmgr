<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Meetingmngr</title>
</head>

<body>
<h1>Add Topic to Database</h1>

<form method="post" action="input.php" id="topic">
	<input type="hidden" value="index.php" />
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
	<a href="view.php">view current topics</a>
</form>
</body>
</html>