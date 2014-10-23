<? session_start();?>
<?php
include("includes/connection.php");
?>
<!DOCTYPE HTML>

<html>
<head>
<title>login</title>
<style>
#grad2
{
width:50px;
height:auto;
float: left;
}

#field{
-ms-box-shadow : inset 0 0 10px #000000 ;
-o-box-shadow : inset 0 0 10px #000000 ;
-moz-box-shadow : inset 0 0 10px #000000 ;
 -webkit-box-shadow : inset 0 0 10px #000000 ;
  box-shadow : inset 0 0 10px #000000 ;
  width:600px;
  background-color:#000099;
}
#side
{
color:#FF0000;
}
#jobs
{
width: 100px;  
text-align: center;
margin-left: 40px;
float: left;
}
</style>
<title>RESET PASSWORD</title>
<?php
include("includes/header.php");
?>
</head>
<body>
<nav id="tabs">
<hr/>
<p align="center"> <FONT COLOR ="blue"><h1> CHANGE PASSWORD USERS SECTION</h1></font></p>
<br/>
<hr/>
</nav>
<div id="contents">
                	<div id="grad1" align="center">
			<fieldset id="field">
			
			<div id="form" style="margin-left: 50px;">			
			<br/>
			<div id ="pic">
			<img src="images/login.jpg" width="200" height="200"/>
			<div/>
			<br/>
			</br>		
			<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
		   <span id="jobs">USERNAME</span> 
	      <span id="job">
			<input type="text" SIZE="60" value="<?php if(isset($_POST["submit"])){echo $_POST["username"];} ?>"  name="username" id="username"   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
        </br>
		    <br/>
			 <span id="jobs">PHONE NUMBER</span> 
	      <span id="job">
			<input type="tel" SIZE="60" value="<?php if(isset($_POST["submit"])){echo $_POST["phone"];} ?>"   name="phone" id="phone"    autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
        </br>
		    <br/>
		<span id="jobs">OLD PASSWORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="password" value="<?php if(isset($_POST["submit"])){echo $_POST["password"];} ?>" id="password"   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">NEW PASSWORD</span> 
	     <span id="job">
			<input type="password" SIZE="60"  name="password1" value="<?php if(isset($_POST["submit"])){echo $_POST["password1"];} ?>" id="password1"   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">CONFIRM PASSWORD</span> 
	     <span id="job">
			<input type="password" SIZE="60"  name="password2" value="<?php if(isset($_POST["submit"])){echo $_POST["password2"];} ?>" id="password2"    autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>       
			</br>
        </br>
		<span style="text-align:right;"  ><input type="submit" SIZE="70"  name="submit" value="reset password" id="submit"></span>
		<a href="AddItem.php">back</a>
		</form>
		<?php
		   if(isset($_POST["submit"]))
		   {
		   $username=$_POST["username"];
		   $secret=$_POST["password"];
		   $phone=$_POST["phone"];
		   $Newpassword=$_POST["password1"];
		   $Confirmpassword=$_POST["password2"];
			$password1=md5($secret);
			$password2=sha1($password1);
			$password3=crypt($password2,"jo");
			
			$password4=md5 ($Confirmpassword);
			$password5=sha1($password4);
			$password6=crypt($password5,"jo");
			
			if(($Newpassword=="")||($Confirmpassword=="" )||( $secret=="")||($username=="")|| ($phone==""))
			{
				echo "<font color='green'><i>all fields are mandatory and cant be empty</i></font>";
			}
			else
				{
     if(($_POST["password1"]=="") || preg_match('/^([a-zA-Z0-9]){5,16}$/',$_POST["password1"])=='0')
			  {
				 echo "<span  style='color:green;background:white;'><b><i>password too short</i></b></span>";	
			   }
			 else{
		   if((strcmp($Newpassword, $Confirmpassword))!=0)
		   {
		     echo "passwords do not match";
		   }
		   else
		   {
		   $sql=mysql_query("select password,Username phonenumber from user where  Username='$username' and password='$password3' and PhoneNumber='$phone'") or die(mysql_error());
		  $num=mysql_num_rows($sql);
		  $row=mysql_fetch_array($sql);
		   if($num<'1')
		   {
		   echo "password or username wrong".mysql_error();
		   }
		   else
		   {
		   $sql=mysql_query("update user set password='$password6' where username='$username'") or die(mysql_error());
		   if(!$sql)
		   {
		   echo "did not update your records".mysql_error();
		   }
		   else
		   {
		  echo "<b><font color='green'><i> you have successfully changed your password you can now log in by clicking link below</i></font></b>";
		 echo " <a href='login.php' id='link' >login</a>";
				 
		      }
			  }
		     }
		 	}}}
		    ?>
		    
		    
                    
</div>
</div>	
			
</fieldset>
</div
			
></div>
	</div>
	
		<?php
include("includes/footer.php");
?>
</body>/
</html>

