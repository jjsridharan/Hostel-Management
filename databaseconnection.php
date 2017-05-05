<?php
$mysql_hostname = "mysql8.000webhost.com";
$mysql_user = "a8355418_hostel1";
$mysql_password = "hariharan@1";
$mysql_database = "a8355418_hostel1";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
if(!$bd)
echo "fail";
else
{
 echo "Connected";
}
?>