
<?php
session_start();
$name =""; 
$email ="";
$fb="";
        
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["name"])) 
   {
      $_SESSION['$messages'][] = "Name is required";
      header("Location:aboutus.php#review");
      exit;
   }
else 
{
      $name = $_POST["name"];
}
  
   if (empty($_POST["email"])) 
   {
      $_SESSION['$messages'][]= "Email is required";
      header("Location:aboutus.php#review");
      exit;
   }
       
    else {
        $email = ($_POST["email"]);
     }
   

   if (empty($_POST["fb"])) 
   {
    $_SESSION['$messages'][]= "FeedBack is required";
    header("Location: aboutus.php#review");
    exit;
    }
    else 
    {
        $fb = ($_POST["fb"]);
    }
   
}

$link = new mysqli("localhost" , "root" ,"","project");
if($link === false)
{
 echo("ERROR :could not connect . " .$link->connect_error);
}
else
{
 echo "connect successfully.host_info: ".$link->host_info."<br>";
}
$sql = "Insert INTO review (Name,Email,Feedback) VALUES ('$_POST[name]','$_POST[email]','$_POST[fb]')";
if($link->query($sql)=== true)
{
    header("Location:aboutus.php#review");
}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>


</body>
</html>
