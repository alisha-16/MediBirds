<html>
    <head>
       
       
        <title>LoginPage</title>
    
        <link rel="stylesheet" type="text/css" href="signin.css">
        
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
		
		<center>SIGN-IN</center><br>
		</font>
        <p class="error"><?php require_once 'messages.php' ?></p><br>
		<form method ="post" action = "signin.php">
		
    
    <input type="text"  name="n" placeholder="Enter your Name"><br><br>
 
    <input type="password" max="8" name="p" placeholder=" Enter your 8-digit Password"><br><br>
	 <input style="font-family:'Garamond';font-size: 24px; " type="submit" id="h" value="SIGN-IN">
	 
	</form>
	<br><center><a id="textbox" href="signup.php">New Customer ?</a></center>
	</font>
		
		
		</div>
		</div>
        
      
    </body>
</html>

