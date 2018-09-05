<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<head><title>Topic Database Contents!</title></head>
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
td {
    border: 1px solid #ddd;
    padding: 8px;
}
table {
	text-align: center;
	margin-left:auto; 
	margin-right:auto; 
}
</style>
<script>
        function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                       SubmitFunction();
                       $('#display').empty();
                       clearInterval(interVal)
                    }
                    },1000);
            }
        }
        
        function SubmitFunction(){
       $('#submitted').html('submitted');
        
        }
    
         CountDown(3,$('#display'));
      
</script>
<body>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'meetingmanager'); //The Blank string is the password
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