<?php
 session_start();
 if(empty($_SESSION['$messages']))
 {
     return;
 }
 $messages = $_SESSION['$messages'];
 unset($_SESSION['$messages']);

?>
<center>
<p style="color:yellow;background-color:transparent;font-size:30px;text-shadow:0 0 5px black;">
*
    <?php 
	foreach ($messages as $message)
	{
      echo $message; 
	}
	?>
    </p>
</center>
	