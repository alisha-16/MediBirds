<html>
    <head>
        <title>LoginPage</title>
    
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>
    <body  >
        <div class="logo">
            <img src="img/logo2.jpg" alt = "not found" usemap = "#hmap">
            <map name = "hmap">
                <area shape = "circle" coords = "0,0,280,250" href = "Homepage.html">
                </map>
        </div>
        <div class="b">
        <div class="div1">

		<font id="content">
		<font style="font-weight:bold;font-size:40px;">
		
		<center>SIGN-UP</center><br>
		</font>

		<form method ="post" action = "reg.php">
		 <p class="error"><?php require_once 'messages.php' ?></p><br>
    <input type="text"  name="n" placeholder="Enter your Name"><br><br>

    
    <input type="email" id="eid" name="e" placeholder=" Enter a valid email address"><br><br>
	 
    <input type="password" max="8" id="pid" name="p" placeholder=" Enter your 8-digit Password "><br><br>
	 <input style="font-family:'Garamond';font-size: 24px; " type="submit" id="h" value="SIGN-UP">
	 
	</form>
	<br><center><a id="textbox" href="signin1.php">Already registered...?</a></center>
	</font>
		
		
		</div>
		</div>
        
      
    </body>
</html>

