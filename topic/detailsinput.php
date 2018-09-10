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

$ID = mysqli_real_escape_string($link, $_GET['ID']);
$notes= mysqli_real_escape_string($link, $_POST['notes']);

echo "<h1>topic_id = " . $ID . "</h1>";
echo "<h2>notes said = " . $notes . "</h2>";

$order = "UPDATE topic SET notes = '$notes' WHERE topic_id = $ID";

$result = mysqli_query($link, $order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}

echo "<br><a href='view.php'>View all topics</a>";
echo "<br><a href='index.php'>Return to Submit topics</a><br>";

?>