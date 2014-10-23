<?php

            function addItem()
            {
            $_SESSION["name"]=$_POST["name"];             
			$_SESSION["senderN"]=$_POST["name"];			
			$_SESSION["Sendertel"]=$_POST["Sendertel"];
			$_SESSION["ReceiverN"]=$_POST["ReceiverN"];
			$_SESSION["Recievertel"]=$_POST["Recievertel"];			
			$_SESSION["sentFrom"]=$_POST["sentFrom"];			
			$_SESSION["sentTo"]=$_POST["sentTo"];
		    }
?>