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
$biltotal = "";
$link = new mysqli("localhost" , "root" ,"","project");
if($link === false)
{
 echo("ERROR :could not connect . " .$link->connect_error);
}
else
{
 echo "connect successfully.host_info: ".$link->host_info."<br>";
}

$p =$_POST['p1'];
$q =$_POST['q1'];
$t = $p*$q;
$_POST['t1']=$t;

if(isset($_POST['a1']))
 {
    $chk = $_POST['s1'];
    if($chk == '1')
    {
        $chk = "small";
    }
    else if($chk == '2')
    {
        $chk = "medium";
    }
    else if($chk == '3')
    {
        $chk = "large";
    }
    
    $_POST['s1'] = $chk;

    $chk1=$_POST['q1'];
    $ta = $_POST['t1'] ;
    $biltotal = $biltotal+$ta;
    $hi = $biltotal;
    if($chk1 > '0')
    {

    $sql = "Insert INTO cart (Productname,Price,Qty,Total,Size) VALUES ('$_POST[n1]','$_POST[p1]','$_POST[q1]','$_POST[t1]','$_POST[s1]')";
     
    session_start();
     $_SESSION['show'] = $hi;
    header("Location : shop.php");    

if($link->query($sql)=== true)
{
echo " records entered in TABLE1 successfully";
}
else
{
echo "ERROR : could not execute  sql "  . $link->error;
}
$link->close();
}
}
else if(isset($_POST['b1']))
{
 $p =$_POST['p1'];
$q =$_POST['q1'];
$t = $p*$q;
$_POST['t1']=$t;
$biltotal = $biltotal-$t;
$sql = "DELETE FROM cart WHERE Productname = '$_POST[n1]' ";
if($link->query($sql)=== true)
{
echo " record with ID-5 DELETED successfully  in table1 of database MYDB";
}
else
{
echo "ERROR : could not execute  sql "  . $link->error;
}
$link->close();

}
if(isset($_POST['b3']))
 {
    
 }

?>
</div>
</div>
</body>
</html>
