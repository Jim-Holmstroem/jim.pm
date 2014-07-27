<?php
if(!isset($_GET["site"]))
{
    $filename = "http://rss.jim.pm";
}
else
{
    $filename = $_GET["site"];
}

$xml = simplexml_load_file($filename);

echo "<h3> RSS(\"".$filename."\") =</h3>";

echo "{<br />";
echo "Title=".$xml->channel->title."";

echo "<ol>";
foreach($xml->xpath("channel/item") as $item)
{
    //echo "[<a href=\"http://rssreader.jim.pm/proxy.php?site=".$item->link."\">Link</a>]
    echo "<li>[ <a href=\"".$item->link."\">Link</a> ] ".$item->title."</li>";
}
echo "</ol>";
echo "}";
?>
