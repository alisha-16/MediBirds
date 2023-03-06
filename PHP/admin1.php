<html>
    <head>
        <title>LoginPage</title>
    
        <link rel="stylesheet" type="text/css" href="admin.css">
     
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
		
		<center>Admin-Login</center><br>
		</font>
        <p class="error"><?php require_once 'messages2.php' ?></p><br>
		<form method="post" action="admin.php"> 
    <input type="text"  name="n" placeholder="Enter your Name"><br><br>
    
    <input type="email" name="Email" placeholder=" Enter a valid email address" ><br><br>
	 
    <input type="password" max="8" name="p" placeholder=" Enter your Password"><br><br>
	 <input style="font-family:'Garamond';font-size: 24px; " type="submit" id="h" value="LOGIN">
	 
	</form>
	
	</font>
		
		
		</div>
		</div>
        
      
    </body>
</html>
