<?php


$user='root';
$pass='';
$db_host='localhost';
$db_database='library';

//$conn = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB     connection');
//mysql_set_charset('utf8');
//mysql_select_db($db_database,$conn);
$conn = new PDO('mysql:host=localhost:3306;dbname=library', $user, $pass);
echo "PDO connection is ok";
?>

 