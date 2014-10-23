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
<p align="center"> <h1>DELETING A USER OR ADMIN</h1></p>
<hr/>
</nav>
<nav id="section">
  <nav>
    <ul>
          <li ><a href="login.php">logout</a></li>
        <li><a href="AddItem.php">add cargo</a></li>
        <li><a href="CargoReceiption.php">receiption confirmation</a></li>               
        <li><a href="AddUser.php">add a user</a></li>
        <li><a href="addDel.php">delete user</a></li>
		  <li><a href="UpdateDel.php">UPDATE/DELETE cargo</a></li>     
		<li><a href="Change_password.php">change password</a></li>   
    </ul>
</nav>
</nav>

<div id="grad1" align="center">
<fieldset id="field">
<div id="content">
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
<BR>
<BR>
<span id="jobs">SELECT CATEGORY</span>
<span id="job">
<select id="cat" name="cat" width="400" height="100" background ="white" style="width:400px">
<option>select category</option>
<option>ADMIN</option>
<option>USER</option>
</select>
         </span>
</span>
<BR/>
<BR/>
<br/>
</br>
<span id="job"><input type="text" size="70" name="search" value="<?php if(isset($_POST["submit"])){echo $_POST["search"];} ?>" id="search" placeholder="Enter search by employ number here" class="hover" hovertext="enter the search key for the users id number"> </span>
<span> <input type="submit" name="submit" value="get">
<br/>
<br/>
<span id="hoverdiv" style="color: #f53f0a;"></span>
<br/>
</form>
<?php
if(isset($_POST["submit"]))
{
if($_POST["cat"]!="select category")
{
$type=$_POST["cat"];
 $EmpNo=stripslashes($_POST["search"]);
$EmpNo=strip_tags($_POST["search"]);
$EmpNo=mysql_real_escape_string($_POST["search"]);
$EmpNo=$_POST["search"];
if($EmpNo=="")
{
echo "no search item entrered by user";
}
$sql=mysql_query("select * from $type where EmpNo ='$EmpNo '") or die(mysql_error());
$num=mysql_num_rows($sql);
if($num<'1')
{
echo "<font color='blue'><em> 'oops' no user found by the number ".$EmpNo." </font> </em>";
}
$row=mysql_fetch_array($sql);
}
else
{
echo "please select category";
}
}
?>
<br/>
<br/>
</br>
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
<span id="jobs">EMPLOYEE NUMBER</span>
<span id="job"><input type="text" size="70" name="Emp"  placeholder="number"  readonly="readonly" value="<? if(isset($_POST["submit"]))
{ if($_POST["cat"]!="select category")
{ echo $row['EmpNo']; }} ?>"></span>
</br>
<br/>
<br/>
<span id="jobs">NAME</span>
<span id="job"><input type="text" size="70" name="name"  placeholder="NAME"  readonly="readonly" value="<? if(isset($_POST["submit"]))
{ if($_POST["cat"]!="select category")
{ echo $row['Full_Names']; }}?>"></span>
</br>
<br/>
<br/>
<span id="jobs">TYPE</span>
<span id="job"><input type="text" size="70" name="type" placeholder="NAME"  readonly="readonly" value="<? if(isset($_POST["submit"]))
{ if($_POST["cat"]!="select category")
{ echo $row['type']; }}?>"></span>
</br>
<br/>
<br/>
<span id="jobs">TELEPHONY</span>
<span id="job"><input type="text" size="70" name="search" id="search" placeholder="TELEPHONE"   readonly="readonly" value="<?if(isset($_POST["submit"]))
{ if($_POST["cat"]!="select category")
{ echo $row['PhoneNumber']; }} ?>"></span>

<span id="job">
<input type="submit" name="submit1" value="delete" class="hover2" hover="WARNING!!! once deleted cant be recovered" />
<script type="text/javascript" src="javaScript/jquery.js"></script>
<script type="text/javascript" src="javaScript/hover.js"></script>
<span id="hove" style="color: #f53f0a;"></span>
<br>
</span>
</form>
<?php
if(isset($_POST["submit1"])){
$name=$_POST["name"];
$type=$_POST["type"];
$No=$_POST["Emp"];

if($name==""&& $type==""&&$No=="")
{
echo "empty fields";
}
if(isset($_POST["submit1"]))
{
$sql=mysql_query("delete from $type where EmpNo='$No'");
if($sql)
{
echo "you have successfully deleted ".$name."  with  Employee number (".$No.") and is nolonger in the payroll ";
}
}
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
