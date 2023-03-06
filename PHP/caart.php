<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
</html>
<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['a1']))
    {
		$n = $_POST['Productname'];
		$q = $_POST['q1'];
		$i = $_POST['i1'];
		$ivn = $i - $q;
		$link = new mysqli("localhost" , "root" ,"","project");
		if($link === false)
		{
		echo("ERROR :could not connect . " .$link->connect_error);
		}
		$sql = "UPDATE inventory set inv = '$ivn' WHERE Productname ='$_POST[Productname]' ";
		if($link->query($sql)=== true)
		{
         header("Location: shop.php");
			
		}
		$link->close();
        if(isset($_SESSION['$cart']))
        {
            
            $count=count($_SESSION['$cart']);
            $_SESSION['$cart'][$count]=array('Productname' => $_POST['Productname'],'Price'=>$_POST['p1'],'Qty'=>$_POST['q1'],'Size'=>$_POST['s1'],'Inventory' => $_POST['i1']);
            echo "<script>
			      alert('item added');
				  window.location.href = 'shop.php';
				  </script>";
		}	
        else
        {
            $_SESSION['$cart'][0]=array('Productname' =>$_POST['Productname'],'Price'=>$_POST['p1'],'Qty'=>$_POST['q1'],'Size'=>$_POST['s1'],'Inventory' => $_POST['i1']);
            echo "<script>
			      alert('item added');
				  window.location.href = 'shop.php';
				  </script>";
            
        }
		
    }
	if(isset($_POST['bt1']))
	{
	foreach($_SESSION['$cart'] as $key => $value)
	{
	if($value['Productname'] == $_POST['Productname'] and $value['Qty'] == $_POST['q1'] )
	{
		
		$n = $_POST['Productname'];
		$q = $_POST['q1'];
		
		$value['Inventory'] = $value['Inventory'] + $q;
		$innv = $value['Inventory']-$q;
		$link = new mysqli("localhost" , "root" ,"","project");
		if($link === false)
		{
		echo("ERROR :could not connect . " .$link->connect_error);
		}
		$sql1 = "UPDATE inventory set inv = '$innv' WHERE Productname ='$_POST[Productname]' ";
		if($link->query($sql1)=== true)
		{
		  unset($_SESSION['$cart'][$key]);
	      $_SESSION['$cart'] = array_values($_SESSION['$cart']);
          echo "<script>
			      alert('item removed');
				  window.location.href = 'mycart.php';
				  </script>";
		}
		$link->close();
	}
  }
}
}

?>