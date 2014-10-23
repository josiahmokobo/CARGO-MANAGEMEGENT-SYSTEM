<?php
session_start();
if(!$_SESSION['username'])
{
header("location:index.php");
}
include("includes/header.php");
include("includes/connection.php");
?>
<title>cargo delivery</title>
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
<p align="center"> <h1>CARGO DELIVERY CONFIRMATION</h1></p>
<hr/>
<nav id="section">
  <nav>
    <ul>
       <li ><a href="logout.php">logout</a></li>
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
</span>
<BR/>
<BR/>
<p>[<i><font color="blue">MAKE A SEARCH FOR THE GOOD TO PICKED BY THE  CLIENT USING THE SEARCH ITEM THE CLIENT WILL GIVE YOU</font></i>]</p>

<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
<span id="job"><input type="text" size="70" name="search" value="<?php if(isset($_POST["submit"])){echo $_POST["search"];} ?>" id="search" placeholder="Enter the serial number of the cargo package here"></span>
<span id="jobs">
 <input type="submit" name="submit" value="get">
</span>
</form>
<br/>
<br/>
<br/>
<?php
if(isset($_POST["submit"]))
{
 $cargo=stripslashes($_POST["search"]);
$cargo=strip_tags($_POST["search"]);
$cargo=mysql_real_escape_string($_POST["search"]);

$cargo=$_POST["search"];  
$sql3=mysql_query("select * from cargo_description  where Serial_Number='$cargo'  and status='picked'  ") or die(mysql_error());
$countz=mysql_num_rows($sql3);
$row=mysql_fetch_array($sql3);
$pn= $row['Reciever_Phone'];
$Rn=$row['Reciever_Name'];
if($countz>'0')
{
echo "<font color='blue'> <b>the package has already  been picked by<i><font color='red'> ". $Rn." </font></i> and phone number is <i><font color='red'>".$pn. "  </b></font>  or" ;
}
{
$sql=mysql_query("select * from cargo_description  where Serial_Number='$cargo' and status='null' ") or die(mysql_error());
if(mysql_num_rows($sql)==0)

{
echo "<font color='blue'> <b>no records found please confirm the search key from the client again</b> </font>";
}
$row=mysql_fetch_array($sql);
}
}
?>
<br/>

<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
</br>
</BR>
<span id="jobs">NAME OF RECIEVER</span>
<span id="job"> 
<input type="text" SIZE="60" value="<? if(isset($_POST["submit"]))
{ echo $row['Reciever_Name']; }  else echo '';?>"  name="name" id="name"  readonly="readonly"  placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
 </span>        
 <BR/>
</BR>
<BR>												
<span id="jobs">PHONE NUMBER </span>
<span id="job">
 <input type="text" SIZE="60"  value="<? if(isset($_POST["submit"]))
{ echo $row['Reciever_Phone']; } else echo '';?>"  name="phone" readonly="readonly"  id="phone" placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>
<span id="jobs">CARGO NAME</span>
<span id="job">
 <input type="text" SIZE="60"  value="<? if(isset($_POST["submit"]))
{ echo $row['Name']; }  ;?>"  name="cargo" id="cargo" readonly="readonly"  placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>	
<span id="jobs">CARGO FROM</span>
<span id="job">
 <input type="text" SIZE="60"  value="<? if(isset($_POST["submit"]))
{ echo $row['Sender_Name']; } ;?>"  name="from" id="from" readonly="readonly"  placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>			
<span id="jobs">SENT TO</span>
<span id="job">
 <input type="text" SIZE="60"  value="<? if(isset($_POST["submit"]))
{ echo $row['Sent_To']; }  ;?>"  name="to" id="to" readonly="readonly"  placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>	
<span id="jobs">SERIAL NUMBER</span>
<span id="job">
 <input type="text" SIZE="60" name="number"  value="<? if(isset($_POST["submit"]))
{ echo $row['Serial_Number']; };?>"  name="to" id="to" readonly="readonly"  placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>	
<p>
<input type="checkbox" id="agree" name="agree"/> I agree </p>
[<i><font color="blue">for changes to take effect make sure that you check above</font></i>]
<p>
<input id="continue" type="submit" value="add and send" disabled="disabled" name="continue"/>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/hide.js"></script>
</BR>
</form>

<?php
if(isset($_POST["continue"] )) 
{
if(isset($_POST["agree"] )) 
{
if(($_POST["to"])=="" ||($_POST["from"])=="" ||($_POST["phone"])=="" ||($_POST["to"])=="" ||($_POST["name"])=="" ||($_POST["cargo"])=="" )
{
echo "<span > <font color='blue'><i> all fields reqired </i></font></span>" ;
}
else
{
$msg="hallo ,  your cargo has been recieved by  ".$_POST["name"]." and his phone number is ".$_POST["phone"]."  please inform us of any inconvience,   served by  ". $_SESSION['Fname']."  Cargo Agency";
$fill1=$_POST["phone"];
$sn=$_POST["number"];
$sql=mysql_query("insert into ozekimessageout values ('','0703922095','$fill1','$msg',now(),'','','send','','')") or die(mysql_error());
if($sql)
{
echo "goods has been successfully been recieved by <font color='blue'> <em>" .$_POST["name"]. " </font></em>";
$sql=mysql_query("update cargo_description set status='picked'  where Serial_Number='$sn' ") or die(mysql_error());
}
else{
echo "error in submitting".mysql_error();
}
}}
}
?>
</div>
</fieldset>
</div>

<?php
include("includes/footer.php");
?>
</body>
</html>
