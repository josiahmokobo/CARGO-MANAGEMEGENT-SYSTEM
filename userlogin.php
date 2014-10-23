<?php
session_start();
if(!$_SESSION['username'])
{
header("location:index.php");
}
include("includes/header.php");
include("includes/connection.php");
?>
<title>user login</title>
<nav id="tabs">
<hr/>
<p align="center"> <h1>ADDING A USER OR ADMIN</h1></p>
<br/>
<hr/>
</nav>
<nav id="section">
  <nav>
    <ul>
          <li ><a href="login.php">login</a></li>
        <li><a href="AddItem.php">add cargo</a></li>
        <li><a href="CargoReceiption.php">receiption confirmation</a></li>               
        <li><a href="AddUser.php">add a user</a></li>
        <li><a href="configuration/www.php">xxxxxxxxxxx</a></li>
    </ul>
</nav>
</nav>
<div id="grad1" align="center">

<fieldset id="field">
<div id="content">
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
 </br>    
</BR>
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
<input type="text" SIZE="60"  name="name" id="name" placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
         </span>

            
           </BR>
           </BR>
           </BR>
<span id="jobs">PHONE NUMBER</span>
<span id="job"> 
<input type="tel" SIZE="60"  name="phone" id="phone" placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
         </span>
           
           </BR>
           </BR>
           </BR>
 <span id="jobs">EMAIL </span>
 <span id="job">
 <input type="text" SIZE="60"  name="email" id="email" placeholder="this is a required field"  autocomplete="off">
 </span>
<BR>
</BR>
<BR>			
<span id="jobs">DOB </span>
<span id="job">
<input type="date" SIZE="51"  name="dob" id="dob" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
				
<span id="jobs">LOCATION </span>
<span id="job">
 <input type="text" SIZE="60"  name="location" placeholder="this is a required field" id="location"  autocomplete="off">
 </span>
</BR>
 <BR>
<BR>						
<span id="jobs">USERNAME </span>
<span id="job">
 <input type="text" SIZE="60"  name="username" id="username" placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>
				
<span id="jobs">PASSWORD </span>
<span id="job">
<input type="PASSWORD" SIZE="60"  name="password" id="password" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
<span id="jobs">
IMAGE: </span>
<span id="job">
 <input type="file" SIZE="90"  name="fileUpload"  id="fileUpload"value="upload">
 </span>
 </br>
</BR>
<BR>
<span id="jobs">
TAKE A SNAPSHOT(click the button to take your photo here) </span>
<span id="job">
 <input type="button" id="snap" name="snap" value="TAKE SNAPSHOT" onClick="window.location.href='http://localhost/cargo/javaScript/webcam/jscam_canvas_only.swf'">
 </span>
</br>
</br>
</br>			
<span style="text-align:right;"><input type="submit" SIZE="70"  name="submit" value="add" id="submit"></span>
</BR>
</form>
<?php
if(isset($_POST["submit"]))
{

if($_POST["name"]=="")
			{
              echo "<span  style='color:red;background:white;'><b>empty field admin name</b></span>";
			}
     
			elseif($_POST["email"]=="")
            {
            echo "<span  style='color:red;background:white;'><b>empty field admin email</b></span>";
            }

			elseif($_POST["dob"]=="")
            {
            echo "<span  style='color:red;background:white;'><b>empty field admin date of birth</b></span>";	
            }
			elseif($_POST["location"]=="")
			{
			 echo "<span  style='color:red;background:white;'><b>empty field admin location</b></span>";		
			}
			elseif($_POST["password"]=="")
			{
				 echo "<span  style='color:red;background:white;'><b>empty field admin password</b></span>";	
			}
			elseif($_POST["username"]=="")		
			{
			 echo "<span  style='color:red;background:white;'><b>empty field admin username</b></span>";
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
			$password1=md5($password);
			$password2=sha1($password1);
			$password3=crypt($password2,"jo");
			
if($_POST["cat"]=="ADMIN")
{
$sql=mysql_query("insert into Admin Values('$_POST[phone]','$_POST[email]','$_POST[name]',
'$_POST[location]','$_POST[username]','$password3', '$_POST[cat]')") or die(mysql_error());
if(!$sql)
{
echo "faiilure";
}
else
{
echo "success";
}
}
else if($_POST["cat"]=="USER")
{
$sql=mysql_query("insert into User Values('$_POST[phone]','$_POST[name]','$_POST[email]',
'$_POST[location]','$_POST[username]','$password3', '$_POST[cat]')") or die(mysql_error());
if(!$sql)
{
echo "faiilure";
}
else
{
echo "success";
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
