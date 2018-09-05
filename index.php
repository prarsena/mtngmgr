<html><head><title>Meetingmngr</title></head><body>
<h1>Add Topic to Database</h1>
<style>
body {
    background-color: lightblue;
}

h1 {
    color: white;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 20px;
    }
</style>
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