<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
if(!$con)
{
	die('could not connect: '.mysql_error());
}
	mysql_select_db("cargo");
	$backup_file="localhost\3rdyear\cargo\backup";
	$sql="LOAD  DATA INFILE '$backup_file' INTO TABLE  admin";
	$retrieval=mysql_query("$sql") or die(mysql_error());
	if(!$retrieval)
	{
	echo 	"could not load data".mysql_error();
	}
	else

	echo "loaded successfully\n";

	mysql_close();

?>