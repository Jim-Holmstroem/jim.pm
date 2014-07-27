<?php
require "../connect.php";


if(isset($_GET["url"]))
{
    $q = mysql_query(sprintf("SELECT url FROM `url` WHERE short='%s'",mysql_real_escape_string($_GET["url"])));

    if(!$q){
        echo "error<br>";
        echo mysql_error();
    }

    $row = mysql_fetch_assoc($q);

    Header( "Location: ".$row["url"], true, 301);
    mysql_free_result($q);
}
else
{
    echo '<html><body>';
    echo '<form method="post" action="input.php">';
    echo 'Short:<input type="text" name="short" size="20"><br>';
    echo 'Url:<input type="text" name="url" size="20">';
    echo '<input type="submit" name="submit" value="set"><br>';
    echo '<hr>';
    echo '</body></html>';

    $q = mysql_query(sprintf("SELECT * FROM `url`"));

    while($row = mysql_fetch_assoc($q))
    {
        echo sprintf("<a href=\"%s\">%s</a><br>",$row["url"],$row["short"]);
    }  
}

?>

