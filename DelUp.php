<?php
include("includes/header.php");
?>
<title>adding a user</title>
<nav id="tabs">
<hr/>
<p align="center"> ADDING A USER</p>
<br/>
<hr/>
</nav>
<nav id="section">
  <nav>
    <ul>
          <li ><a href="login.php">login</a></li>
        <li><a href="AddItem.php">add cargo</a></li>
        <li><a href="CargoReceiption.php">receiption confirmation</a></li>               
        <li><a href="index.php">add a user</a></li>
       <li><a href="www.php">xxxxxxxxxxx</a></li>
    </ul>
</nav>
</nav>
<div id="grad1" align="center">
<fieldset id="field">
<div id="content">
<form action="" method="post" style="table-layout:auto" method="post" enctype="multipart/form-data">
<span id="jobs">NAME:</span>
<span id="jobs"> 
<input type="text" SIZE="70"  name="name" id="name"  placeholder="this is a required field" style="-webkit-box-sizing:border-box;"autocomplete="off">
         </span>
            
           </BR>
           </BR>
           </BR>
 <span id="jobs">EMAIL :</span>
 <span id="jobs">
 <input type="text" SIZE="70"  name="email" id="email" placeholder="this is a required field"  autocomplete="off">
 </span>
<BR>
</BR>
<BR>			
<span id="jobs">DOB :</span>
<span id="jobs">
<input type="date" SIZE="51"  name="dob" id="dob" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
				
<span id="jobs">LOCATION :</span>
<span id="jobs">
 <input type="text" SIZE="70"  name="location" placeholder="this is a required field" id="location"  autocomplete="off">
 </span>
</BR>
 <BR>
<BR>						
<span id="jobs">USERNAME :</span>
<span id="jobs">
 <input type="text" SIZE="70"  name="username" id="username" placeholder="this is a required field" autocomplete="off">
 </span>
</br>
</BR>
<BR>
				
<span id="jobs">PASSWORD :</span>
<span id="jobs">
<input type="PASSWORD" SIZE="70"  name="password" id="password" placeholder="this is a required field"  autocomplete="off">
</span>
</br>
</BR>
<BR>
<span id="jobs">
IMAGE: </span>
<span id="jobs">
 <input type="file" SIZE="90"  name="fileUpload"  id="fileUpload"value="upload">
 </span>
</br>
</br>
</br>			
<span style="text-align:right;"><input type="submit" SIZE="70"  name="submit" value="add" id="submit"></span>
</BR>
</form>
</div>
</fieldset>
</div>

<?php
include("includes/footer.php");
?>
</body>
</html>
