<HTML>
<HEAD>
    <style>
        *{
            margin:0;
            
        }
        .h{
            font-size:30px;
            color:black;
            font-weight:20px; 
            text-shadow:5px 5px 5px black;
            text-align:center;
            margin-top: 18%;
            margin-right: 20%;
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
                    <img src="img/logo fixed.jpg" alt = "not found" usemap = "#hmap">
                    <map name = "hmap">
                        <area shape = "circle" coords = "0,0,280,250" href = "prodhmpg.php">
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
$chk=$_POST['n1'];
if($chk == 'Dignity Magna')
{
$sql = "DELETE from cart WHERE Productname = 'Dignity Magna' ";
if($link->query($sql)=== true)
{
    echo "<br> Surgical Product record deleted ";
}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
}
else if($chk == 'Dignity Premium')
{
$sql = "DELETE from cart WHERE Productname = 'Dignity Premium' ";
if($link->query($sql)=== true)
{
    echo "<br> Surgical Product record deleted ";
}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
}
?>
</div>
</div>
</body>
</html>
