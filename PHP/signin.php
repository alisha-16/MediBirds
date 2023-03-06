<?php
session_start();
$n =""; 
$p ="";

        
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["n"])) 
   {
      $_SESSION['$messages'][] = "Name is required";
      header("Location:signin1.php");
      exit;
   }
   else 
   {
      $n = $_POST["n"];
   }
  
   if (empty($_POST["p"])) 
   {
      $_SESSION['$messages'][]= "password is required";
      header("Location:signin1.php");
      exit;
   }
   else if(strlen($_POST["p"]) > 8)
   { // Max 
            $_SESSION['$messages'][] = "Password: Max length 8 Characters Not allowed";
            header("Location:signin1.php");
            exit;
        }
       
    else 
    {
        $p = ($_POST["p"]);
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
$sql = "SELECT * FROM register WHERE Name='$_POST[n]' and Password='$_POST[p]'";
$res=$link->query($sql);
$numrows=mysqli_num_rows($res);
if($numrows==1)
{
session_start();
$_SESSION['sess']=$_POST[n];
header("Location:shop.php");
}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>

</html>
