<?php
echo sprintf(date('{
"\d\a\t\e":{
    "\d\a\y":j,
    "\m\o\n\t\h":n,
    "\y\e\a\r":Y,
    "\w\e\e\k":W,
    "\w\e\e\k\d\a\y":"l",
    "\y\e\a\r\d\a\y":z
    },
"\t\i\m\e":{
    "\h\o\u\r":%\d,
    "\m\i\n\u\t\e":%\d,
    "\s\e\c\o\n\d":%\d,
    "\t\i\m\e\z\o\n\e":"P"
    },
"\R\F\C\2\8\2\2":"r",
"\t\i\m\e\s\t\a\m\p":U
}'),intval(date('H')),intval(date('i')),intval(date('s'))); #since json doesn't support leading zeros and php does not not support leading zeros.
?>
