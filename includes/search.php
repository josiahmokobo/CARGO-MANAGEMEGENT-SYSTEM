<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("Cargo") or die(mysql_error());
?>

<?php
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select * from cargo_description where Serial_Number like '%$q%' and status !='picked' limit 5") or die(mysql_error());
while($row=mysql_fetch_array($sql_res))
{
$ssid=$row['Serial_Number'];
$name=$row['Name'];
$senderN=$row['Sender_Name'];
$phone=$row['Reciever_Phone'];
?>
<div class="show" align="left">
<img src="author.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $ssid; ?></span>&nbsp;<br/><?php echo "sender phone number:". $senderN; ?> &nbsp;<br/><?php echo $phone; ?><br/>
</div>
<?php
}
}
?>
