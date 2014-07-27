<?php

/* Database config */

$db_host = 'jim.pm.mysql';
$db_user = 'jim_pm';
$db_pass = file_get_contents('password.key', 1, NULL, 0, 8);
$db_database = 'jim_pm';

/* End config */

$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_set_charset('utf8');
mysql_select_db($db_database,$link);

?>
