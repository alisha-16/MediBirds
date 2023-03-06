<html>
    <head>
        <link rel="stylesheet" href="adminhmpg.css">
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
                <font  style="font-size:30px;font-weight:bold;color:white;background-color:black;border-radius:25px;text-align:center;padding:10px;margin-left:25%;margin-top:1%;">
                <?php
        session_start();
        echo " welcome to Admin Page ".$_SESSION['session_user'];
        
        ?>
                </font>
                <div class="menu">
                    <ul>
                        <li><a class="active" href="prodhmpg.php">PRODUCT</a></li>
                        <li><a href="emphmpg.php">EMPLOYEE</a></li>
                    </ul>

                </div>
            </div>
        </header>
    </div>
    </body>
</html>