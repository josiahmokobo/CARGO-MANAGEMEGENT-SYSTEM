<?php
mysql_connect("localhost","root","");
mysql_select_db("cargo");
$name=mysql_real_escape_string($_POST['name']);
if($name==NULL)
echo "please enter a name";
else
{
$age=mysql_query("select Name from cargo_description where serial_number ='$name'") or die(mysql_error());
$age1=mysql_num_rows($age);
while($row=mysql_fetch_array($age)){
if($age1=='0')
echo "name does not exist";
else{
echo "<font color='blue'> <b>the package has already  been picked by<i><font color='red'> ". $Rn." </font></i> and phone number is <i><font color='red'>".$pn. "  </b></font>  or" ;

}}
}

?>