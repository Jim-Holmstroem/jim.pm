<?php
if(empty($_GET["subject"]))
{
    Header( "HTTP/1.1 301 Moved Permanently" );
    Header( "Location: http://github.com/Jim-Holmstroem/cheatsheet");
}
else
{
    Header( "HTTP/1.1 301 Moved Permanently" );
    Header( "Location: http://github.com/Jim-Holmstroem/cheatsheet/tree/master/".$_GET["subject"]);	
}
?> 
