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
<title>login page</title>
<?php
include("includes/header.php");
?>
</head>
<body>
<nav id="tabs">
<hr/>
<p align="center"> <FONT COLOR ="red"> LOGIN WITH VALID CREDENTIALS PLEASE</font></p>
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

			<div id="myForm">
			<p align="center"><font color="green"><b>USERS LOGIN</font></b></p>
			<form action="" method="post" style="table-layout:auto" method="post">
			</br>
	      	        </br>
			<span id="jobs">USERNAME</span> 
	      	        <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
                        </br>
			</br>
			</BR>
                        </br>
			<span id="jobs">PASSWORD</span>
			<span id="job">
			 <input type="password" SIZE="60"  name="password" id="password" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="*** password field required"></BR>
			</span>
			</BR>
		        </br>
			</br>
			 </br>
			<span style="text-align:right;"  ><input type="submit" SIZE="70"  name="submit" value="login" id="submit"></span>
			<hr/ style="color:blue;">
			<span id="jobs" style="text-align:left;"><input type="submit" SIZE="70"  name="submit1" value="forgot password" id="submit1"></span>
			<span id="jobs" style="text-align:left;"><input type="reset" SIZE="70"  name="reset" value="reset" id="reset"></span>
						<span id="jobs" style="text-align:left;"><input type="submit" SIZE="70"  name="change" value="CHANGE PASSWORD" id="change"></span>
			</br>
			</br>
			</br>
				<hr/ style="color:blue;">
				
				<?php
			if(isset($_POST["change"]))
			{
		   ?>
		   <p>change your password</p>
		   <span id="jobs">USERNAME</span> 
	      <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
        </br>
		    <br/>
			<span id="jobs">PHONE NUMBER</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">OLD PASSWORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">NEW PASSWORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">CONFIRM PASSWORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span style="text-align:right;"  ><input type="submit" SIZE="70"  name="submit" value="reset password" id="submit"></span>
		   <?php
		   
			}
		    ?>
			<?php
		  if(isset($_POST["change"]))
		   {
		   ?>
		   <p>reset your password</p>
		   <span id="jobs">USERNAME</span> 
	      <span id="job">
			<input type="text" SIZE="60"  name="username" id="username" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
        </br>
		    <br/>
			<span id="jobs">PHONE NUMBER</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="phone" id="phone" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="phone field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">SECRET WORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="word" id="word" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="secrete word field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">NEW PASSWORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="password1" id="password1" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="new password field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span id="jobs">CONFIRM PASSWORD</span> 
	     <span id="job">
			<input type="text" SIZE="60"  name="password2" id="password" style="-webkit-box-sizing:border-box; "   autocomplete="off" placeholder="confirm password field required"></BR>
			</span>
			</BR>
			</br>
        </br>
		<span style="text-align:right;"  ><input type="submit" SIZE="70"  name="replace" value="reset password" id="replace"></span>
		   <?php
		   if(isset($_POST["change"]))
		   {
		   $username=$_POST["username"];
		   $phone=$_POST["phone"];
		   $secret=$_POST["word"];
		   $Newpassword=$_POST["password1"];
		   $Confirmpassword=$_POST["password2"];
			$password1=md5($Confirmpassword);
			$password2=sha1($password1);
			$password3=crypt($password2,"jo");
			if(isset($_POST["replace"]))
			{
			if($Newpassword==''&& $Confirmpassword='')
			{
			echo "all the fields are required";
			}
			else
			{
		   if((strcmp($Newpassword, $Confirmpassword))==1)
		   {
		     echo "password matches";
		   }
		   else
		   {
		   $sql=mysql_query("select word,PhoneNumber,Username from user where Username='$username' && word='$secret' && PhoneNumber='$phone'");
		   $num=mysql_num_rows($sql);
		   if($num=='0')
		   {
		   echo "incorrect secret word found";
		   }
		   else
		   {
		   $sql=mysql_query("update user set password='$password3'") or die(mysql_error());
		   if(!$sql)
		   {
		   echo "did not update your records";
		   }
		   else
		   {
		     echo "your records were succefully updated";
		   }
		   }
		   }
			}
		    }
		    ?>
                    <?php
			if(isset($_POST["submit"]))
			{
			if(($_POST["username"]=="")&&($_POST["password"]==""))
			{
				
			echo "<span style='color:red;background:white;text-align:right; font-weight:bold;'>all fields reqired</span>" ;
			}
			else{
			$password=$_POST["password"];
			$username=$_POST["username"];
			$password1=md5($password);
			$password2=sha1($password1);
			$password3=crypt($password2,"jo");
					
			$sql="SELECT * FROM User WHERE username='$username' and password='$password3'" or die(mysql_error());   
              $result=mysql_query($sql) or die(mysql_error()) ;
             $count=mysql_num_rows($result); 

             if($count==1){
             $row=mysql_fetch_array($result);
              header('Location:AddItem.php');
           $_SESSION['username']=$row['username'];		 
		  $_SESSION['admin']=$row['type'];	
           echo 	$_SESSION['admin'];		
             }
        else {
      echo "<span style='color:green;background:white;text-align:right;'>wrong password or username please try again</span>" ;
     
   
}
}}

}
}
?>

</form>
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

