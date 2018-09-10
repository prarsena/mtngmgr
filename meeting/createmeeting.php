<?php

$link = mysqli_connect("localhost", "root", "root", "meetingmanager");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Success: A proper connection to MySQL was made! The meetingmanager database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_select_db($link, "meetingmanager");

$name= mysqli_real_escape_string($link, $_POST['name']);
$date= mysqli_real_escape_string($link, $_POST['date']);
$host= mysqli_real_escape_string($link, $_POST['host']);

$order = "INSERT INTO meeting

        (name, date, host)

        VALUES

        ('".$name."',
        
        '".$date."',

        '".$host."')";


$result = mysqli_query($link, $order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}

echo "<br><a href='index.php'>New meeting</a><br>";
echo "<br><a href='view.php'>View meetings</a>";
?>