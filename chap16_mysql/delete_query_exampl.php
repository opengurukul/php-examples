<?php
$con = mysql_connect("localhost","root","root");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("my_db", $con);

mysql_query("DELETE FROM Persons WHERE LastName='Griffin'");

mysql_close($con);
?> 