<html>
    <head>
        <link rel="stylesheet" href="prodhmg.css">
    </head>
    <body>
        <div class="org">
        <header>
            <div class="main">
                <div class="logo">
                    <img src="img/logo2.jpg" alt = "not found" usemap = "#hmap">
                    <map name = "hmap">
                        <area shape = "circle" coords = "0,0,280,250" href = "Homepage.html">
                        </map>
                </div>  
                <div class="menu">
                    <ul>
                        <li><a class="active" href="prdcreate.html">Create</a></li>
                        <li><a href="pmodify.html">Modify</a></li>
                        <li><a href="prdtdelete.html">delete</a></li>
                        <li><a href="logout.php">LogOut</a></li>
                    </ul>
                   <br> <font  style="font-size:25px;font-weight:bold;color:white;background-color:black;border-radius:25px;text-align:center;padding:10px;margin-top:5%;">
            <?php
    session_start();
    echo " Welcome to Product Page ".$_SESSION['session_user'];
    
    ?>
    
            </font>
                </div>
            </div>
        </header>
        
    
    <div class="cen">
        <h2 id="hero-text">The Heathier You is what we do!!</h2>
    </div>
    </div>
    </body>
</html>