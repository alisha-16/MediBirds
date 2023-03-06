<HTML>
<HEAD>
    <style>
        *{
            margin:0;
            
        }
        .h{
            font-size:30px;
            color:firebrick;
            font-weight:bold; 
            -webkit-text-stroke: 1px black;
            text-align:center;
            margin-top: 18%;
            margin-right: 20%;
            padding-right: 20%;
            padding-left: 24%;
        }
        .org{
            background-image: url(img/prdhmpg2.jpeg);
    height: 664px;
    width: auto;
    overflow-y: hidden;
    overflow-x: hidden;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    
                   }
        .logo img{
    float: left;
    width: 180px;
    height: auto;
    border: 7px solid white;
    padding-top:0%;
    padding-left:0%;
    margin-top:0%;
    margin-right:2%;
    }
    </style>
</head>

<div class="org">
<div class="logo">
                    <img src="img/logo2.jpg" alt = "not found" usemap = "#hmap">
                    <map name = "hmap">
                        <area shape = "circle" coords = "0,0,280,250" href = "emphmpg.php">
                        </map>
                </div> 
 <div class="h">               
<?php
$link = new mysqli("localhost" , "root" ,"","project");
if($link === false)
{
 echo("ERROR :could not connect . " .$link->connect_error);
}
else
{
 echo "connect successfully.host_info: ".$link->host_info."<br>";
}
$sql = "DELETE from employee WHERE Email = '$_POST[EID]'";
if($link->query($sql)=== true)
{
echo "<br>  Employee record deleted ";

}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>
</div>
</div>
</body>
</html>
