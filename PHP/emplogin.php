<HTML>
<?php
session_start();
$n =""; 
$p ="";
$e="";
$phn="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["n1"])) 
   {
      $_SESSION['$messages'][] = "Name is required";
      header("Location:emplogin1.php");
      exit;
   }
   else 
   {
      $n = $_POST["n1"];
   }
   $email =$_POST["EID"];
   if (empty($_POST["EID"])) 
   {
      $_SESSION['$messages'][] = "Email is required";
      header("Location:emplogin1.php");
      exit;
   }
   
   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
   {
   $_SESSION['$messages'][] = "Invalid email format";
   header("Location:emplogin1.php");
      exit;
   }
   else 
   {
      $e = $_POST["EID"];
   }

   if (empty($_POST["p1"])) 
   {
      $_SESSION['$messages'][]= "password is required";
      header("Location:emplogin1.php");
      exit;
   }
   else if(strlen($_POST["p1"]) > 8)
   { // Max 
            $_SESSION['$messages'][] = "Password: Max length 8 Characters Not allowed";
            header("Location:emplogin1.php");
            exit;
        }
       
    else 
    {
        $p = ($_POST["p1"]);
     }

    if (empty($_POST["phn"])) 
   {
      $_SESSION['$messages'][] = "Phone no. is required";
      header("Location:emplogin1.php");
      exit;
   }
   else 
   {
      $phn = $_POST["phn"];
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
$sql = "SELECT * FROM employee WHERE Name = '$_POST[n1]' and Password = '$_POST[p1]'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows == 1)
{
 $_SESSION['session_user'] = $_POST[n1];
 header("Location: prodhmpg.php");

}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>
</div>
</body>
</html>
