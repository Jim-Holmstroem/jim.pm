<?php
require "../connect.php";

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<rss version=\"2.0\">";
echo "<channel>\n";

echo "<title>Jim's RSS</title>\n";
echo "<link>http://rss.jim.pm</link>\n";
echo "<description>Jim Holmström's RSS feed containing to interesting material in machine learning, functional programming and programming in general.</description>\n";
echo "<language>en-us</language>\n";
echo "<copyright>Copyright 2013, Jim Holmström</copyright>\n";
echo "<managingEditor>me@jim.pm (Jim Holmström)</managingEditor>\n";
echo "<webMaster>me@jim.pm (Jim Holmström)</webMaster>\n";
echo "<category>machine-learning</category>\n";
echo "<image><url>http://portfolio.jim.pm/classification_example.png</url><title>RSS feed icon</title><link>http://rss.jim.pm</link></image>\n";


$q = mysql_query("SELECT * FROM `rss` ORDER BY id DESC");
if(!$q)
{
    echo "error<br>";
    echo mysql_error();
}

while($row=mysql_fetch_assoc($q))
{
    echo "<item>\n";
    echo "    <title><![CDATA[".$row['title']."]]></title>\n";
    echo "    <link><![CDATA[".$row['link']."]]></link>\n";
    echo "    <description><![CDATA[".$row['description']."]]></description>\n";
    echo "    <comments><![CDATA[".$row['comments']."]]></comments>\n";
    echo "</item>\n";
}

mysql_free_result($q);

echo "</channel>\n";
echo "</rss>\n";

?>
