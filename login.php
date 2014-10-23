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
<p align="center"> <FONT COLOR ="red"><h1> LOGIN WITH VALID CREDENTIALS PLEASE</h1></font></p>
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
			<input type="text" SIZE="60"  name="username" value="<?php if(isset($_POST["submit"])){echo $_POST["username"];} ?>" id="username"   autocomplete="off" placeholder="username field required"></BR>
			</span>
			</BR>
                        </br>
			</br>
			</BR>
                        </br>
			<span id="jobs">PASSWORD</span>
			<span id="job">
			 <input type="password" SIZE="60"  name="password" value="<?php if(isset($_POST["submit"])){echo $_POST["password"];} ?>" id="password"    autocomplete="off" placeholder="*** password field required"></BR>
			</span>
			</BR>
		        </br>
			</br>
			 </br>
			<span style="text-align:right;"><input type="submit" SIZE="70"  name="submit" value="login" id="submit"></span>
        <a href="userforgot.php">forgot password</a>
		
		<br/>
			 <a href="index.php">back</a>
			</br>
		    
                    <?php
			if(isset($_POST["submit"]))
			{
			if(($_POST["username"]=="")||($_POST["password"]==""))
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
                                $_SESSION['Fname']=$row['Full_Names'];  	
             }
        else {
      echo "<span style='color:green;background:white;text-align:right;'>wrong password or username please try again</span>" ;
        }

       }}
?>

</form>
</div>
</div>	
			
</fieldset>
</div></div>
	</div>
	
		<?php
include("includes/footer.php");
?>
</body>
</html>

