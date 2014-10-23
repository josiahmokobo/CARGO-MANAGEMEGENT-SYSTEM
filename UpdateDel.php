<?php
session_start();
if(!$_SESSION['username'])
{
header("location:index.php");
}
include("includes/header.php");
include("includes/connection.php");
?>
<title>updating records</title>
<link rel="stylesheet" type="text/css" href="javaScript/style.css"/>
<nav id="tabs">
<hr/>
<?php
 if($_SESSION['admin']=='ADMIN'){
$var1= $_SESSION["username"];
$query=mysql_query("SELECT Full_Names,photo FROM admin where username='$var1' ") or die(mysql_error());
 ?>
<?php
while($row=mysql_fetch_array($query)){
?>
<img src="images/<?=$row["photo"];?>"width="50"height="50"border="2" alt="<? echo $var?>" >
<?php
echo $row["Full_Names"]."  "."logged in";
}
}
else
{
$var1= $_SESSION["username"];
$query=mysql_query("SELECT Full_Names,photo FROM user where username='$var1' ") or die(mysql_error());
 ?>
<?php
while($row=mysql_fetch_array($query)){
?>
<img src="images/<?=$row["photo"];?>"width="50"height="50"border="2" alt="<? echo $var?>" >
<?php
echo $row["Full_Names"]."  "."logged in";
}
}
?>
<p align="center"> <h1>DELETING OR UPDATING A CARGO ITEM</h1></p>
<hr/>
</nav>
<nav id="section">
  <nav>
    <ul>
          <li ><a href="login.php">logout</a></li>
        <li><a href="AddItem.php">add cargo</a></li>
        <li><a href="CargoReceiption.php">receiption confirmation</a></li>               
		   <li><a href="UpdateDel.php">UPDATE/DELETE cargo</a></li>      
		   		 <?php
          if($_SESSION['admin']=='ADMIN'){
          echo " <li><a href='AddUser.php'>add a user</a></li> ";
          echo  "<li><a href='addDel.php'>delete user</a></li>";   
	       echo "<li><a href='Change_password.php'>change password</a></li> "; 
            }
	        if($_SESSION['admin']=='USER')
	         {
	        echo "<li><a href='userChange.php'>change password</a></li> "; 
	        }
		?> 
    </ul>
</nav>
</nav>

<div id="grad1" align="center">
<fieldset id="field">
<div id="content">
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
<BR/>
<BR/>
<span id="job"><input type="text" class="search" id="searchid" value="<?php if(isset($_POST["submit"])){echo $_POST["searchid"];} ?>" size="70" name="searchid" placeholder="enter search key"  autocomplete="off" hovertext="enter search id here"/> </span>
<span> <input type="submit" name="submit" value="get" >
<br/>
<br/>
</span>
<span id="hoverdiv" style="color: #f53f0a;"></span>
<br/>
</form>
<div id="result">
</div>
<?php
if(isset($_POST["submit"]))
{
 $EmpNo=stripslashes($_POST["searchid"]);
$EmpNo=strip_tags($_POST["searchid"]);
$EmpNo=mysql_real_escape_string($_POST["searchid"]);
$EmpNo=$_POST["searchid"];
if($_POST["searchid"]=="")
{
echo "<i><font color='green'> no search key entered</font></i>";
}
else{
$sql=mysql_query("select * from cargo_description where Serial_Number ='$EmpNo '") or die(mysql_error());
$num=mysql_num_rows($sql);
if($num=='0')
{
echo "<i><font color='blue'>no records found for serial number</font></i> ". $EmpNo." ";
}
else
$row=mysql_fetch_array($sql);
}}
?>
<br/>
<br/>
</br>
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
<span id="jobs">SERIAL NUMBER</span>
<span id="job"><input type="text" size="70" name="serial"  placeholder="serial number" value="<? if(isset($_POST["submit"])) 
{ echo $row['Serial_Number']; } ?>"></span>
</br>
<br/>
<br/>
<span id="jobs">NAME OF CARGO</span>
<span id="job"><input type="text" size="70" name="cargo"  placeholder="number" value="<? if(isset($_POST["submit"])) 
{ echo $row['Name']; } ?>"></span>
</br>
<br/>
<br/>
<span id="jobs">SENDER NAME</span>
<span id="job"><input type="text" size="70" name="Sname"  placeholder="senders phone number"   value="<? if(isset($_POST["submit"]))
{ echo $row['Sender_Name']; }?>"></span>
</br>
<br/>
<br/>
<span id="jobs">SENDER PHONE</span>
<span id="job"><input type="text" size="70" name="Sender_Phone" id="Sender_Phone" placeholder="sender's phone number"  value="<? if(isset($_POST["submit"]))

{ echo $row['Sender_Phone']; }?>"></span>
</br>
<br/>
<br/>
<span id="jobs">RECIEVER NAME</span>
<span id="job"><input type="text" size="70" name="Rname" id="Rname" placeholder="reviever's phone number"    value="<?if(isset($_POST["submit"]))
{ echo $row['Reciever_Name']; } ?>"></span>
</br>
<br/>
<br/>
<span id="jobs">RECEIVER PHONE</span>
<span id="job"><input type="text" size="70" name="Rphone" id="Rphone" placeholder="receiver's phone"    value="<?if(isset($_POST["submit"]))
{ echo $row['Reciever_Phone']; } ?>"></span>
</br>
<br/>
<br/>
<span id="jobs">SENT FROM</span>
<span id="job"><input type="text" size="70" name="Sfrom" id="Sfrom" placeholder="receiver's phone"    value="<?if(isset($_POST["submit"]))
{ echo $row['Sent_From']; } ?>"></span>
</br>
<br/>
<br/>
<span id="jobs">SENT TO</span>
<span id="job">
<input type="text" size="70" name="to" id="to" placeholder="receiver's phone" value="<?if(isset($_POST["submit"]))
{ echo $row['Sent_To']; } ?>">
</span>
</br>
<br/>
<br/>
<span id="jobs">STATUS</span>
<span id="job"><input type="text" size="70" placeholder="status"  readonly="readonly"   value="<?if(isset($_POST["submit"]))
{ echo $row['status']; } ?>"></span>
</br>
<br/>
<br/>
<span id="job">
<input type="submit" name="submit1" value="update" class="hover2" hover="UPDATE RECORDS" />

<br>
</span>

<span id="job">
<input type="submit" name="submit2" value="delete" class="hover2" hover="delete records"/>
<script type="text/javascript" src="javaScript/jquery.js"></script>
<script type="text/javascript" src="javaScript/hover.js"></script>
<span id="hove" style="color: #f53f0a;"></span>
<br>
</span>
<br/>
<br/>
</form>
<?php
if(isset($_POST["submit1"])){
$serial=$_POST["serial"];
$cargo=$_POST["cargo"];
$Sname=$_POST["Sname"];
$Rname=$_POST["Rname"];
$Rphone=$_POST["Rphone"];
$Sfrom=$_POST["Sfrom"];
$sto=$_POST["to"];
$Sphone=$_POST["Sender_Phone"];
if($cargo==""&& $serial==""&&$Sname==""&& $Sphone==""&& $Rname==""&&$Rphone=="" && $Sfrom==""&&$sto=="")
{
echo "<i><font color='blue'>fields should not be empty</font></i>";
}

else{
$sql=mysql_query("update  cargo_description set Name='$cargo' ,Sender_Name='$Sname', Sender_Phone='$Sphone', Reciever_Name='$Rname',  Reciever_phone='$Rphone', Sent_From='$Sfrom', Sent_To='$sto' where Serial_Number='$serial'") or die(mysql_error());
if($sql)
{
echo "<font color='green'> <i>You have successfully updated <font color='red'>".$cargo. ",</font> ". $Sname."'s  cargo  with  serial number <font color='red'><b>".$serial." </b></font></font></i>";
$fill1="Hi we made the changes u resqueted and the cargo to be sent is  ".$cargo."  and the receiver is  ".$Sname."  sorry for any inconvience,   served by  ". $_SESSION['Fname']."  Cargo Agency";
 $sql1= mysql_query("insert into ozekimessageout values('','0703922095','$_POST[Sender_Phone]','$fill1',now(),'','','send','','SMS:TEXT' )");
 echo $_POST["Sender_Phone"];
}
}
}
if(isset($_POST["submit2"]))
{
$serial=$_POST["serial"];
$cargo=$_POST["cargo"];
$Sname=$_POST["Sname"];
$Rname=$_POST["Rname"];
$Rphone=$_POST["Rphone"];
$Sfrom=$_POST["Sfrom"];
$sto=$_POST["to"];
$Sphone=$_POST["Sender_Phone"];
if($cargo==""&&$Sname==""&& $Sphone==""&& $Rname==""&&$Rphone=="" && $Sfrom==""&&$sto=="")
{
echo "<i><font color='blue'>fields should not be empty</font></i>";
}
else
{
$sql=mysql_query("delete from cargo_description  where Serial_Number='$serial'") or die(mysql_error());
if($sql)
{
$fills="Hi we made the changes u resqueted and the cargo serial number ".$serial."  transaction has been reverted and wont be sent, Cargo Agency";
 $sql1= mysql_query("insert into ozekimessageout values('','0703922095','$_POST[Sender_Phone]','$fills',now(),'','','send','','SMS:TEXT' )");
 
 $fillz="Hi  there has been  changes with  the cargo serial number ".$serial."  you were to be sent  transaction has been reverted and wont be sent,   served by  ". $_SESSION['Fname']."   Cargo Agency";
 $sql1= mysql_query("insert into ozekimessageout values('','0703922095','$_POST[Sender_Phone]','$fillz',now(),'','','send','','SMS:TEXT' )");
echo "<font color='green'> <i>You have successfully deleted <font color='red'>".$cargo. ",</font> ". $Sname."'s  cargo  with  serial number <font color='red'><b>".$serial." </b></font></font></i>";
}
}}
?>

</div>
</fieldset>
</div>

<?php
include("includes/footer.php");
?>
</body>
</html>
