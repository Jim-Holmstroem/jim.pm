<?php
$url = $_GET['url'];
while($pos = strpos($url,'%'))
{
    $url = substr($url,0,$pos).chr(hexdec(substr($url,$pos+1,2))).substr($url,$pos+3);
}
print $url;
#header("Location: ".$url); #some weird issue when opening files doesn't force a addressbas update, and renders it unusable.
?>
