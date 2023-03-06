<html>
    <head>
        <link rel="stylesheet" href="emphmpg.css">
    </head>
    <body>
        
        <div class="org">
        <header>
            <div class="main">
                <div class="logo">
                    <img src="img/logo2.jpg" alt = "not found" usemap = "#hmap">
                    <map name = "hmap">
                        <area shape = "circle" coords = "0,0,280,250" href = "adminhmpg.php">
                        </map>
                </div>  
                <div class="menu">
                    <ul>
                        <li><a class="active" href="empcreate.html">Create</a></li>
                        <li><a href="emodify.html">Modify</a></li>
                        <li><a href="empdelete.html">delete</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    <br> &nbsp;&nbsp;<font  style="font-size:25px;font-weight:bold;color:white;background-color:black;border-radius:25px;text-align:center;padding:10px;">
                    <?php
        session_start();
        echo " welcome to Employee Page ".$_SESSION['session_user'];
        
        ?>
        </font>
                </div>
            </div>
        </header>
        
    <div class="cen">
        <h2 id="hero-text">we believe in teams because good team outweighs bad option</h2>
    </div>
    </div>
    </body>
</html>