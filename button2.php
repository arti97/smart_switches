<link rel="stylesheet" type="text/css" href="style.css" /> 
<div class="container">
<body style="background-image:url(bgimage4.jpg)">
<title>Smart Switches</title>
<h1>Internet of Things Implementation</h1>
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
$onstring = "FAN ON";
//$sql = "INSERT INTO lightStatus (on_off) VALUES ('ON')";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>
<h2>The Device has been Switched ON </h2>
</html>
";
}
else if(isset($_POST['off']))
{
$offstring = "FAN OFF";
//$sql = "INSERT INTO lightStatus (on_off) VALUES ('OFF')";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<h2>The Device has been Switched OFF </h2>
</html>
";
}

else if(isset($_POST['auto']))
{
$autostring = "FAN AUTO";
//$sql = "INSERT INTO lightStatus (on_off) VALUES ('OFF')";
fwrite($handle, $autostring);
fclose($handle);
print "
<html>
<h2>The device functioning is now based on automatic sensor data </h2>
</html>
";
}
//$con->commit();
//$con->close();
?>
</body>
</div>
