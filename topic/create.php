<?
include("../library/template.inc.php");	
$sql = "INSERT INTO `user`
						(`userName`, `password`, `name`, 
						`email`, `location`, `age`) 
					VALUES 
							('" . $_GET['userName'] . "',  PASSWORD('" . $_GET['password'] . "'),
							'" . $_GET['name'] . "','" . $_GET['email'] . "',
					 		'" . $_GET['location'] . "','" . $_GET['age'] . "')";
mysql_query($sql) or die("problem: " . mysql_error() . "<br/> query: " . $sql);  


Header("Location: index.php");
?> 
