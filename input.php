<?php

$link = mysqli_connect("localhost", "root", "", "meetingmanager");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Success: A proper connection to MySQL was made! The meetingmanager database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_select_db($link, "meetingmanager");

$topic= mysqli_real_escape_string($link, $_POST['topic']);
$time= mysqli_real_escape_string($link, $_POST['time']);
$author= mysqli_real_escape_string($link, $_POST['author']);


$order = "INSERT INTO topic

        (topic, time, author)

        VALUES

        ('".$topic."',

        '".$time."',
        
        '".$author."' )";


$result = mysqli_query($link, $order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}

echo "<br><a href='index.php'>Return to Index</a><br>";
echo "<br><a href='view.php'>View all tutors</a>";
?>