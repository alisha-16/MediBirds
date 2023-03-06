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
<p style="color:red;background-color:transparent;text-shadow:0 0 5px white;">
*
    <?php 
	foreach ($messages as $message)
	{
      echo $message; 
	}
	?>
    </p>
</center>
	