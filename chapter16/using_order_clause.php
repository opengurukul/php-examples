<?php
$con = mysql_connect("localhost","root","root");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM Persons ORDER BY age");

while($row = mysql_fetch_array($result))
{
echo $row['FirstName'];
echo " " . $row['LastName'];
echo " " . $row['Age'];
echo "<br />";
}

mysql_close($con);
?>


