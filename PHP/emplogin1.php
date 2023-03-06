<html>
    <head>
        <title>Loginemp</title>
        <link rel="stylesheet" type="text/css" href="emplogin.css">
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
		<center>Employee-Login</center><br>
		</font>
        <p class="error"><?php require_once 'messages2.php' ?></p><br>
		<form method="post" action="emplogin.php">
    <input type="text"  name="n1" placeholder="Enter your Name" ><br><br>

    <input type="text" name="EID" placeholder=" Enter a valid employee Id" ><br><br>

    <input type="password"  name="p1" placeholder=" Enter your Password" ><br><br>
	<input type="number" min="10"  name="phn" placeholder=" Enter your phone no.{eg +123456}"  ><br><br>
	
	 <input style="font-family:'Garamond';font-size: 24px; " type="submit" id="h" value="LOGIN" >
     
	 
	</form>
	
	</font>
</div>
</div>	
</body>
</html>		
		
        
      
   
