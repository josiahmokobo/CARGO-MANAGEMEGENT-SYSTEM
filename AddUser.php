<?php
session_start();
if(!$_SESSION['username'])
{
header("location:index.php");
}
include("includes/header.php");
include("includes/connection.php");
?>
<title>ADD USER</title>
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
<p align="center"><h1> ADDING A USER OR ADMIN</h1></p>
<hr/>
<nav id="section">
  <nav>
    <ul>
         <li ><a href="logout.php">logout</a></li>
        <li><a href="AddItem.php">add cargo</a></li>
        <li><a href="CargoReceiption.php">receiption confirmation</a></li>               
        <li><a href="adduser.php">add a user</a></li>
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
 </br>    
<span id="jobs">CATEGORY</span>
<span id="job"> 
<select id="cat" name="cat" width="400" height="100" background ="white" style="width:400px">
<option>select category</option>
<option>ADMIN</option>
<option>USER</option>
</select>
         </span>
</BR>
</br>
<span id="jobs">NAME</span>
<span id="job"> 
<input type="text" SIZE="60"  name="name" id="name" value="<?php if(isset($_POST["submit1"])){echo $_POST["name"];} ?>" placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
         </span>

            
           </BR>
           </BR>
           </BR>
<span id="jobs">PHONE NUMBER</span>
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
<input type="tel" SIZE="44"  name="phone" value="<?php if(isset($_POST["submit1"])){echo $_POST["phone"];} ?>" id="phone" placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
         </span>
           
           </BR>
           </BR>
           </BR>
 <span id="jobs">EMAIL </span>
 <span id="job">
 <input type="email" SIZE="60"  name="email" value="<?php if(isset($_POST["submit1"])){echo $_POST["email"];} ?>" id="email" placeholder="this is a required field"  autocomplete="off">
 </span>
<BR>
</BR>
<BR>			
<span id="jobs">DOB </span>
<span id="job">
<input type="date" SIZE="51"  name="dob" value="<?php if(isset($_POST["submit1"])){echo $_POST["dob"];} ?>" id="dob" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
				
<span id="jobs">LOCATION </span>
<span id="job">
 <input type="text" SIZE="60"  name="location" value="<?php if(isset($_POST["submit1"])){echo $_POST["location"];} ?>" placeholder="this is a required field" id="location"  autocomplete="off">
 </span>
</BR>
 <BR>
<BR>						
<span id="jobs">USERNAME </span>
<span id="job">
 <input type="text" SIZE="60"  name="username" id="username" value="<?php if(isset($_POST["submit1"])){echo $_POST["username"];} ?>" placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>
				
<span id="jobs">PASSWORD </span>
<span id="job">
<input type="PASSWORD" SIZE="60"  name="password" id="password" value="<?php if(isset($_POST["submit1"])){echo $_POST["password"];} ?>" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
<span id="jobs">
IMAGE: </span>
<span id="job">
 <input type="file"  name="fileUpload"  id="fileUpload"value="upload">
 </span>
 </br>
</BR>
<BR>
<span id="job">
<input type="submit" name="submit1" value="Add user" class="hover2" hover="WARNING!!! the users rights may be elevated" />
<script type="text/javascript" src="javaScript/jquery.js"></script>
<script type="text/javascript" src="javaScript/hover.js"></script>
<span id="hove" style="color: #f53f0a;"></span>
<br>
</span>
<br/>
<br/>
</form>
<?php
if(isset($_POST["submit1"]))
{
if(($_POST["name"]=="") || preg_match('/^([a-zA-Z]){3,20}$/',$_POST["name"])=='0')	
			{
              echo "<span  style='color:green;background:white;'><b>name filed is mandatory and dont take numbers and should contain more than three characters</b></span>";
			}
     
			elseif($_POST["email"]=="") 
            {
            echo "<span  style='color:green;background:white;'><b>enter an email please</b></span>";
            }
           elseif(($_POST["phone"]=="")|| preg_match('/^([0-9]){9,14}$/',$_POST["phone"])=='0')
            {
            echo "<span  style='color:green;background:white;'><b>phone number field is manadatory and should contain minimum of 10 digits</b></span>";	
            }
			elseif($_POST["dob"]=="")
            {
            echo "<span  style='color:green;background:white;'><b>date of birth field cant be empty</b></span>";	
            }
			elseif($_POST["location"]=="")
			{
			 echo "<span  style='color:green;background:white;'><b>location field is mandatory</b></span>";		
			}
			elseif(($_POST["password"]=="") || preg_match('/^([a-zA-Z0-9]){6,16}$/',$_POST["password"])=='0')
			{
				 echo "<span  style='color:green;background:white;'><b>password too short</b></span>";	
			}
			elseif(($_POST["username"]=="")|| preg_match('/^([a-zA-Z0-9]){4,16}$/',$_POST["username"])=='0')
			{
			 echo "<span  style='color:red;background:white;'><b>username field should contain more than for character</b></span>";
			 
			 }		 
			else{
			$name=stripslashes($_POST["name"]);
			$name=strip_tags($_POST["name"]);
			$name=mysql_real_escape_string($_POST["name"]);
			
			$email=stripslashes($_POST["email"]);
			$email=strip_tags($_POST["email"]);
			$email=mysql_real_escape_string($_POST["email"]);
			
			$dob=stripslashes($_POST["dob"]);
			$dob=strip_tags($_POST["dob"]);
			$dob=mysql_real_escape_string($_POST["dob"]);
			
			
			$location=stripslashes($_POST["location"]);
			$location=strip_tags($_POST["location"]);
			$location=mysql_real_escape_string($_POST["location"]);
			
			$password=stripslashes($_POST["password"]);
			$password=strip_tags($_POST["password"]);
			$password=mysql_real_escape_string($_POST["password"]);
			
			$username=stripslashes($_POST["username"]);
			$username=strip_tags($_POST["username"]);
			$username=mysql_real_escape_string($_POST["username"]);
			
			$phone=stripslashes($_POST["phone"]);
			$phone=strip_tags($_POST["phone"]);
			$phone=mysql_real_escape_string($_POST["phone"]);
			
			$password1=md5($password);
			$password2=sha1($password1);
			$password3=crypt($password2,"jo");
	$codem=$_POST["code"].$phone;				
if($_POST["cat"]=="ADMIN")
{
if($_FILES["fileUpload"]["name"] != "")  
{  
if(copy($_FILES["fileUpload"]["tmp_name"],"images/".$_FILES["fileUpload"]["name"]))  
{  
$sql=mysql_query("insert into Admin Values('$codem','$name','$email',
'$location','$username','$password3', '$_POST[cat]','','".$_FILES["fileUpload"]["name"]."')") or  die("username  email or phone number already in use");
}}
if(!$sql)
{
echo "faillure";
}
else
{
$sql5=mysql_query("select * from Admin");
$row=mysql_fetch_array($sql5);
$sn=$row['EmpNo'];
echo "congratulations ".$name. " has been added to the system as a an Admin and employee number is <font color='blue'>".$sn." </font> welcome";
}
}
else if($_POST["cat"]=="USER")
{
if($_FILES["fileUpload"]["name"] != "")  
{  
if(copy($_FILES["fileUpload"]["tmp_name"],"images/".$_FILES["fileUpload"]["name"]))  
{  
$sql=mysql_query("insert into User Values('$_POST[phone]','$_POST[name]','$_POST[email]',
'$_POST[location]','$_POST[username]','$password3', '$_POST[cat]','',  '".$_FILES["fileUpload"]["name"]."' )") or die("username or email already in use");
}}
if(!$sql)
{
echo "faiilure";
}
else
{
$sql5=mysql_query("select * from user");
$row=mysql_fetch_array($sql5);
$sn=$row['EmpNo'];
echo "congratulations ".$name." has been added to the system as a user and employee number is <font color='blue'>".$sn."</font>";
}
}
else
{
echo "the admin or normal user is compulsory";
}
}}
?>
</div>


</fieldset>
</div>
<div id="webcam"></div>

<?php
include("includes/footer.php");
?>
</body>
</html>
