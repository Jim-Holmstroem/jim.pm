<?php

require "../connect.php";

//inserting data order
$q = sprintf("INSERT INTO `url` (short, url) VALUES ('%s','%s')",mysql_real_escape_string($_POST["short"]),mysql_real_escape_string($_POST["url"]));

//declare in the order variable
$result = mysql_query($q);	//order executes
if($result){
	echo("OK");
} else{
	echo("FAIL");
}
?>
