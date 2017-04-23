<?php
$file = "buttonStatus2.txt";
$handle = fopen($file,'w+');
//$con = new mysqli("localhost","root","root","smartswitch");
/*if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
//mysql_select_db("smartswitch", $con);*/
if (isset($_POST['on']))
{
$onstring = "ON";
//$sql = "INSERT INTO lightStatus (on_off) VALUES ('ON')";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>
<body>
<title>Smart Switches</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Internet of Things Implementation</h2>
<h2>The Device has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off']))
{
$offstring = "OFF";
//$sql = "INSERT INTO lightStatus (on_off) VALUES ('OFF')";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>Smart Switches</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Internet of Things Implementation</h2>
<h2>The Device has been Turned OFF </h2>
</body>
</html>
";
}

else if(isset($_POST['aon']))
{
$aonstring = "AON";
//$sql = "INSERT INTO lightStatus (on_off) VALUES ('OFF')";
fwrite($handle, $aonstring);
fclose($handle);
print "
<html>
<body>
<title>Smart Switches</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>Internet of Things Implementation</h2>
<h2>The Device is now based on automatic sensor data </h2>
</body>
</html>
";
}
//$con->commit();
//$con->close();
?>