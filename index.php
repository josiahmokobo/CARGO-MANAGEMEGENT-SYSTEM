<? session_start();?>
<?php
include("includes/connection.php");
?>
<!DOCTYPE HTML>

<html>
<head>
<title>login</title>
<style>

#field{
-moz-box-shadow : inset 0 0 10px #000000 ;
 -webkit-box-shadow : inset 0 0 10px #000000 ;
  box-shadow : inset 0 0 10px #000000 ;
  width:600px;
  background-color:#000099;
}
</style>
<title>home</title>
<?php
include("includes/header.php");
?>
</head>
<body>
<nav id="tabs">
<hr/>
<p align="center"> <FONT COLOR ="blue"> <b><h1>YOU MUST BE A REGISTERED MEMBER OR ADMIN TO USE THIS SYSTEM</h1></font></b></p>
<br/>
<hr/>
</nav>
<div id="contents">
        <div id="grad1" align="center">
			<fieldset id="field">
			<div id="form" style="margin-left: 5px;">			
			<br/>
			<div id ="pic">
			<a href="Admnlogin.php"><button><img src="images/admin.jpg" width="300" height="150" id="image"/></button> </a>	 		<span align="center"><font color="green"><b>  ADMIN LOGIN</font></b></span>
			</br>
			<br/>

			<br/>
			
		<a href="login.php">   <button><img src="images/login.jpg" width="300" height="150" id="image"/></button> </a>     <span align="center"><font color="green"><b>  USER LOGIN</font></b></span>
			<div/>
			<br/>


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
</body>
</html>

