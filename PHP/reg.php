<HTML>

<?php
session_start();
$n =""; 
$p ="";
$e="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["n"])) 
   {
      $_SESSION['$messages'][] = "Name is required";
      header("Location:signup.php");
      exit;
   }
   else 
   {
      $n = $_POST["n"];
   }
  
   if (empty($_POST["e"])) 
   {
      $_SESSION['$messages'][] = "Email is required";
      header("Location:signup.php");
      exit;
   }
   else 
   {
      $e = $_POST["e"];
   }

   if (empty($_POST["p"])) 
   {
      $_SESSION['$messages'][]= "password is required";
      header("Location:signup.php");
      exit;
   }
   else if(strlen($_POST["p"]) > 8)
   { // Max 
            $_SESSION['$messages'][] = "Password: Max length 8 Characters Not allowed";
            header("Location:signup.php");
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
$sql = "Insert INTO register (Name,Email,Password) VALUES ('$_POST[n]','$_POST[e]','$_POST[p]')";
if($link->query($sql)=== true)
{
    header("Location: signin1.php");
}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>
</html>
