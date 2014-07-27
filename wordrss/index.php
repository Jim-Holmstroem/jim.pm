<?php
require "wordlist.php";

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<rss version=\"2.0\">";
echo "<channel>\n";

echo "<title>Jim's 1500 strong word list</title>\n";
echo "<link>http://wordrss.jim.pm</link>\n";
echo "<description>Contains 1500 good to know english words.</description>\n";
echo "<language>en-us</language>\n";
echo "<copyright>Copyright 2013, Jim Holmström</copyright>\n";
echo "<managingEditor>me@jim.pm (Jim Holmström)</managingEditor>\n";
echo "<webMaster>me@jim.pm (Jim Holmström)</webMaster>\n";
echo "<category>language</category>\n";

foreach(array_rand($wordlist, 16) as $word)
{
    #$first_image_data = json_decode(file_get_contents("https://ajax.googleapis.com/ajax/services/search/images?v=1.0&imgsz=medium&rsz=1&q=$word"), true);
    echo "<item>\n";
    echo "    <title><![CDATA[$word]]></title>\n";
    echo "    <link><![CDATA[http://dictionary.reference.com/browse/$word]]></link>\n";
    echo "    <guid isPermalink=\"true\"><![CDATA[http://dictionary.reference.com/browse/$word]]></guid>\n";
    echo "    <comments><![CDATA[None, sorry..]]></comments>\n";
    echo "    <description><![CDATA[ <p>".$wordlist[$word]."</p>]]></description>\n";
    echo "</item>\n";
}

echo "</channel>\n";
echo "</rss>\n";

?>
