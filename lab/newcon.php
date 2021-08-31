<?php


$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
//$links = mysqli_connect($dbhost, $dbuser, $dbpass);

function addition() {
  $GLOBALS['links'] = mysqli_connect($GLOBALS['dbhost'] , $GLOBALS['dbuser'] , $GLOBALS['dbpass'] );
}
//$links = mysql_connect('localhost', 'root', '');

//$link = mysql_connect('localhost','root','');
addition();
if (!$links) {
    die('Could not connect: ' . mysql_error());
}
  //mysql_close($link);
//mysql_select_db('library',$links ) or die ('Database didnot select');
//echo 'Connected successfully';

?>
