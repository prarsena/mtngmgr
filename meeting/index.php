<html>
<head>
<link rel="stylesheet" href="../library/style.css">
<title>Meetingmngr</title>
</head>

<body>
<h1>Create Meeting</h1>

<form method="post" action="createmeeting.php" id="meeting">
	<input type="hidden" value="index.php" />
	<fieldset>
		<div>
			<label for="name">Meeting Name: </label>
			<input name="name" id="name" type="text" value="" />
		</div>
		<div>
			<label for="date">Date: </label>
			<input name="date" id="date" type="date" value="" />
		</div>
		<div>
			<label for="host">Organizer: </label>
			<input name="host" id="host" type="text" value="" />
		</div>
	</fieldset>
	<div>
		<input type="submit" value="submit" />
	</div>
	<br> <br>
	<a href="view.php">See topics</a>
</form>
</body>
</html>