
$_POST['s1'] = $chk;
chk = $_POST['s1'];
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
if($chk1 > '0')
{
$sql = "Insert INTO cart (Productname,Price,Qty,Total,Size) VALUES ('$_POST[n1]','$_POST[p1]','$_POST[q1]','$_POST[t1]','$_POST[s1]')"; 


$_SESSION['cart'][0]=array('Productname' =>$_POST['n1'],'Price'=>$_POST['p1'],'Qty'=>$_POST['q1'],'Total'=>$_POST['t1'],'Size'=>$_POST['s1']);


<script>
         
         function msum()
         {
             var billtotal=0;
             var p,q,t;
             p=document.f1.p1.value;
             q=document.f1.q1.value;
             t=p*q;
             billtotal+=t;
             document.f.bt1.value=billtotal;
             document.f1.t1.value=t;
             
         }
         function psum()
         {
             var billtotal=0;
             var p,q,t;
             p=document.f2.p1.value;
             q=document.f2.q1.value;
             t=p*q;
             billtotal+=t;
             document.f.bt1.value=billtotal;
             document.f2.t1.value=t;
             
         }
     </script>

     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>
     <body>
     <input type="hidden" name="Productname" value="Dignity Magna"><input type="hidden" name="Price" value="355"> 
     </body>
     </html>







     
<?php
session_start();
$Name =""; 
$cty ="";
$m="";
$r="";
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
      $_SESSION['$messages'][] = "City is required";
      header("Location:joinus.php");
      exit;
   }
   else 
   {
      $cty = $_POST["cty"];
   }

   if (empty($_POST["m"])) 
   {
      $_SESSION['$messages'][]= "Motive is required";
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
     if (empty($_POST["r"])) 
   {
      $_SESSION['$messages'][] = "Resume is required";
      header("Location:joinus.php");
      exit;
   }
   else 
   {
      $r = $_POST["r"];
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
$sql = "Insert INTO join (Name,City,Motive,Email) VALUES ('$_POST[Name]','$_POST[cty]','$_POST[m]','$_POST[r]')";
if($link->query($sql)=== true)
{
    header("Location: joinus.php");

}
else
{
echo "ERROR : could not execute  sql "  . $link->error."<br>";
}
$link->close();
?>

