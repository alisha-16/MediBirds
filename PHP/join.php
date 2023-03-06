<HTML>
<head>
</head>
<style>
        *{
            margin:0;
            
        }
        .h{
            font-size:40px;
            color:blue;
            font-weight:bold; 
            text-shadow:0px 0px 3px white;
            text-align:center;
            margin-top: 18%;
            margin-right: 30%;
            padding-right: 20%;
        }
        .org{
            background-image: url(img/hawai.jpg);
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
 <div class="org">
<div class="logo">
                    <img src="img/logo2.jpg" alt = "not found" usemap = "#hmap">
                    <map name = "hmap">
                        <area shape = "circle" coords = "0,0,280,250" href = "Homepage.html">
                        </map>
                </div> 
 <div class="h">      
<?php
session_start();
$Name =""; 
$cty ="";
$m="";
$r = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["Name"])) 
   {
      $_SESSION['$messages'][] = "Name is required";
      header("Location:joinus.php");
      exit;
   }
   else 
   {
      $Name = $_POST["Name"];
   }
  
   if (empty($_POST["cty"])) 
   {
      $_SESSION['$messages'][] = "city name is required";
      header("Location:joinus.php");
      exit;
   }
   else 
   {
      $cty = $_POST["cty"];
   }

   if (empty($_POST["m"])) 
   {
      $_SESSION['$messages'][]= "motive is required";
      header("Location:joinus.php");
      exit;
   }
   else if(strlen($_POST["m"]) > 50)
   { // Max 
            $_SESSION['$messages'][] = "Motive: Max length 50 Characters";
            header("Location:joinus.php");
            exit;
        }
       
    else 
    {
        $m = ($_POST["m"]);
     }
    if (empty($_POST["e"])) 
     {
        $_SESSION['$messages'][]= "email is required";
        header("Location:joinus.php");
        exit;
     }
     else 
     {
         $e = ($_POST["e"]);
      }
}

ob_start();
$link = new mysqli("localhost" , "root" ,"","project");
if($link === false)
{
 echo("ERROR :could not connect . " .$link->connect_error);
}
else
{
 echo "connect successfully.host_info: ".$link->host_info."<br>";
}
$sql = "Insert INTO joinus (Name,City,Motive,Email) VALUES ('$_POST[Name]','$_POST[cty]','$_POST[m]','$_POST[e]')";
if($link->query($sql)=== true)
{
    echo "you have successfully submitted your information";
    
    
}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>
</div>
</div>
</html>
