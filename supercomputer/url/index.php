<?php
require "../connect.php";

if(isset($_GET["url"]))
{

    echo mysql_real_escape_string($_GET["url"]);
    #$q = mysql_query(sprintf("SELECT url FROM `url` WHERE short='%s'",mysql_real_escape_string($_GET["url"])));

    #if(!$q){
    #    echo "error<br>";
    #    echo mysql_error();
    #}

    #$row = mysql_fetch_assoc($q);

    #echo $row["url"];

#Header( "Location: http://".$row["url"], true, 301);
    echo "set";
    #mysql_free_result($q);
}
else
{
    echo "empty";  
}

?>

