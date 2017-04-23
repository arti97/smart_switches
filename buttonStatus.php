<?php
$status = file_get_contents("buttonStatus.txt");
echo $status;
/*$con = mysql_connect("localhost","root","root");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("smartswitch", $con);
$status = "SELECT bstatus FROM button ORDERBY id desc LIMIT 1 OFFSET //write here the value from which we need to print ";
echo $status;
?>