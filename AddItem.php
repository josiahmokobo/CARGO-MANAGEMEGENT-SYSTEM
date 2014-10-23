<?php
session_start();
if(!$_SESSION['username'])
{
header("location:index.php");
}
include("includes/header.php");
include("includes/connection.php");
$namez=$_SESSION['Fname'];
echo $namez;
?>
<title>cargo registration</title>
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
<p align="center"><h1> ADDING CARGO TO BE SENT </h1></p>
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
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
</BR>
</br>
<span id="jobs">NAME OF CARGO</span>
<span id="job"> 
<input type="text" SIZE="60"  name="name" value="<?php if(isset($_POST["submit"])){echo $_POST["name"];} ?>" id="name" placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
         </span>
            
           </BR>
           </BR>
           </BR>
 <span id="jobs">SENDER'S NAME </span>
 <span id="job">
 <input type="text" SIZE="60"  name="senderN" value="<?php if(isset($_POST['submit'])){echo $_POST["senderN"];} ?>" id="senderN" placeholder="this is a required field"  autocomplete="off">
 </span>
<BR>
</BR>
<BR>			
<span id="jobs">SENDER'S PHONE </span>
<span id="job">
<span>
            <select name="codes"  size="1">
            <option>select code</option>
            <?php
		 for($x=1;$x<=300;$x++)
		 {
		 echo "<option>" ."+".$x."</option>";
		 }
		 ?>
              </select>
</span>
<input type="tel" size="44"  name="Sendertel" value="<?php if(isset($_POST["submit"])){echo $_POST["Sendertel"];} ?>" id="Sendertel" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
				
<span id="jobs">RECIEVER'S NAME </span>
<span id="job">
 <input type="text" SIZE="60"  name="ReceiverN" value="<?php if(isset($_POST["submit"])){echo $_POST["ReceiverN"];} ?>" placeholder="this is a required field" id="RecieverN"  autocomplete="off">
 </span>
</BR>
 <BR>
<BR>						
<span id="jobs">RECIEVER'S PHONE NUMBER </span>
<span id="job">
<span>
            <select name="code"  size="1">
            <option>select code</option>
            <?php
		 for($x=1;$x<=300;$x++)
		 {
		 echo "<option>" ."+".$x."</option>";
		 }
		 ?>
              </select>
</span>
 <input type="tel" SIZE="44"  name="Recievertel" value="<?php if(isset($_POST["submit"])){echo $_POST["Recievertel"];} ?>" id="Recievertel" placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>
				
<span id="jobs">SENT FROM</span>
<span id="job">
<input type="text" SIZE="60"  name="sentFrom" value="<?php if(isset($_POST["submit"])){echo $_POST["sentFrom"];} ?>" id="sentFrom" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
<span id="jobs">SENT TO</span>
<span id="job">
<input type="text" SIZE="60" value="<?php if(isset($_POST["submit"])){echo $_POST["sentTo"];} ?>"  name="sentTo" id="sentTo" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</br>
</br>			
<span style="text-align:right;"><input type="submit"   name="submit" value="add & send" id="submit"></span>
</BR>

<?php
 function addItem()
            {
            $_SESSION["name"]=$_POST["name"];             
			$_SESSION["senderN"]=$_POST["senderN"];			
			$_SESSION["Sendertel"]=$_POST["Sendertel"];
			$_SESSION["ReceiverN"]=$_POST["ReceiverN"];
			$_SESSION["Recievertel"]=$_POST["Recievertel"];			
			$_SESSION["sentFrom"]=$_POST["sentFrom"];			
			$_SESSION["sentTo"]=$_POST["sentTo"];
		    }
		     function reset1()
            {
            $_SESSION["name"]="";             
			$_SESSION["senderN"]="";			
			$_SESSION["Sendertel"]="";
			$_SESSION["ReceiverN"]="";
			$_SESSION["Recievertel"]="";			
			$_SESSION["sentFrom"]="";			
			$_SESSION["sentTo"]="";
		    }
if(isset($_POST["submit"]))
{
if($_POST["name"]==""|| $_POST["senderN"]=="" || $_POST["Sendertel"]==""|| $_POST["ReceiverN"]=="" || $_POST["Recievertel"]==""  || $_POST["sentFrom"]=="" || $_POST["sentTo"]=="")
{
	 
		    addItem();
echo "<font color='green'><i>all fields are mandatory and cant be empty</i></font>";
}
else{     
           $name=$_POST["name"];
           $name=  stripslashes($name);
			$name= strip_tags($name);
			$name= mysql_real_escape_string($name);
			 
			$Sname=stripslashes($_POST["senderN"]);
			$Sname=strip_tags($_POST["senderN"]);
			$Sname=mysql_real_escape_string($_POST["senderN"]);
			
			$Stel=stripslashes($_POST["Sendertel"]);
			$Stel=strip_tags($_POST["Sendertel"]);
			$Stel=mysql_real_escape_string($_POST["Sendertel"]);
			
			
			$RName=stripslashes($_POST["ReceiverN"]);
			$RName=strip_tags($_POST["ReceiverN"]);
			$RName=mysql_real_escape_string($_POST["ReceiverN"]);
			
			$Rtel=stripslashes($_POST["Recievertel"]);
			$Rtel=strip_tags($_POST["Recievertel"]);
			$Rtel=mysql_real_escape_string($_POST["Recievertel"]);
			
			$sentFrom=stripslashes($_POST["sentFrom"]);
			$sentFrom=strip_tags($_POST["sentFrom"]);
			$sentFrom=mysql_real_escape_string($_POST["sentFrom"]);
			
			$sentTo=stripslashes($_POST["sentTo"]);
			$sentTo=strip_tags($_POST["sentTo"]);
			$sentTo=mysql_real_escape_string($_POST["sentTo"]);
			$code=$_POST["code"];
			$codes=$_POST["codes"];
	           
		$SendersNum=	$codes.$Stel;
		$ReceiversNum=	$code.$Rtel;
		reset1();

$sql=mysql_query("insert into cargo_description values('',' $name','$Sname','$SendersNum','$RName','$ReceiversNum','$sentFrom','$sentTo',now(),'','null')") or die(mysql_error());
if(!$sql)
{
	echo "faillure";
	addItem();
}
else
{
	echo "<i><font color='magenta'>NOTE: </i></font></i>The cargo of <em><font color='green'>  " .$Sname." </em></font>  has been added to our store ready to be sent with serial number ";
	$sql4=mysql_query("select * from cargo_description where Time_Sent=now()") or die(mysql_error());
	$row=mysql_fetch_array($sql4);
	$sn=$row["Serial_Number"];
	echo "<font color='green'>".$sn."<font/>";
	$fill1="Good Day ".$_POST["ReceiverN"]." your ". $_POST["name"] ." has been sent from  ".$_POST["sentFrom"]." will be delivered to ".$_POST["sentTo"]."  you will be informed upon delivery and the package  serial number is "." $sn." ." , served by  ". $_SESSION['Fname']."  Cargo Agency";
  
   echo"<a href='pdf/index3.php?cargoId=$row[Serial_Number] & username=$namez'>get the receipt</a>";
  reset1();
  $sql1= mysql_query("insert into ozekimessageout values('','0703922095','$ReceiversNum','$fill1',now(),'','','send','','SMS:TEXT' )");
 }
 

	$sql4=mysql_query("select * from cargo_description where Name='$name' and Sender_Name='$_POST[senderN]' and  Sender_Phone='$_POST[Sendertel]' and Reciever_Phone='$_POST[Recievertel]'") or die(mysql_error());
	$row=mysql_fetch_array($sql4);
	$sn=$row["Serial_Number"];
	echo $sn;
	reset1();
	}}
?>
</form>
</div>
</fieldset>

</div>

<?php
include("includes/footer.php");
?>
</body>
</html>
