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
 echo "connect successfully.host_info: ".$link->host_info."<br><br>";
}
$chk = $_POST['QTY'];
if($chk == '1')
{
    $sql = "Insert INTO surgical (Sid,Sname,Sprice) VALUES ('$_POST[EID]','$_POST[Name]','$_POST[price]')";    
    if($link->query($sql)=== true)
{
echo "<br> New Surgical Product added successfully ";

}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();

}
else if($chk == '2')
{
    $sql = "Insert INTO medical (Mid,Mname,Mprice) VALUES ('$_POST[EID]','$_POST[Name]','$_POST[price]')";    
    if($link->query($sql)=== true)
{
echo "<br> New Medical Product added successfully ";

}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();

}
else if($chk == '3')
{
    $sql = "Insert INTO covid (Cid,Cname,Cprice) VALUES ('$_POST[EID]','$_POST[Name]','$_POST[price]')";    
    if($link->query($sql)=== true)
{
echo "<br> New Covid Product added successfully ";

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
