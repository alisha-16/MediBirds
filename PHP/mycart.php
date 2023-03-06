<HTML>
<?php 
session_start();
?>

<HEAD>

<style>
    th{
        background-color: white;
    }
    .dropdown{
        z-index:1;
    }
    .dropdown-content a.l {
        z-index:1;
    }
    .dropdown-content a.l:hover {
        z-index:1;
    }
</style>
<TITLE> CART</TITLE>
<link rel="stylesheet" href="shop.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</HEAD>
<body>
<header>
            <div class="main">
                <div class="logo">
                    <img src="img/logo2.jpg" alt="">
                </div>
                <div class="menu">
                    <ul class="k">
                        <li class="h" ><a class="m" href="Homepage.html"><u style="color: white;height: 5px;">Home</u></a></li>
                        <li class="h"><a class="m" href="catalogsample.html"><u style="color: white;height: 5px;">Catalog</u></a></li>
                        <li class="h"><a class="m" href="aboutus.php"><u style="color: white;height: 5px;">About</u></a></li>
                        <li class="h"><a class="m" href="shop.php"><u style="color: white;height: 5px;">Shop</u></a></li>
                        <li class="h"><a class="m" href="learn.html"><u style="color: white;height: 5px;">LearnWithUs</u></a></li>
                        <li class="h"><a class="m" href="joinus.php"><u style="color: white;height: 5px;">JoinUs</u></a></li>
                        <li class="h"><a class="m" href="admin1.php"><u style="color: white;height: 5px;">Admin</u></a></li>
                        
                   
                    </ul>
                    
                </div>
            </div>

        </header>

      <br><br><br><br><br><br>  
      


<div class = "container">
<div class= "row">
<div class= "col-lg-12 text-center border rounded bg-light my-5">
<h1> MY CART </H1>
</div>
<div class= "col-lg-8">

<table class = "table">
<thead class = "text-center">
<th style= "background-color: white;font-size:20px;" scope = "col"  >Serial no.</th>
<th style= "background-color: white;font-size:20px;" scope = "col" > Product Name </th>
<th style= "background-color: white;font-size:20px;" scope = "col" > Price </th>
<th style= "background-color: white;font-size:20px;" scope = "col" > Qty </th>
<th style= "background-color: white;font-size:20px;" scope = "col" > Size </th>
<th style= "background-color: white;font-size:20px;" scope = "col" > </th>
<tr>
</thead>
<tbody class = "text-center">
<?php

$total = 0;

if(isset($_SESSION['$cart']))
{
foreach($_SESSION['$cart'] as $key => $value)
{
$sr = $key + 1;
$total = $total + ($value['Price'] * $value['Qty']);
if($value['Size'] == 1)
{
    $sz="Small";
}
else if($value['Size'] == 2)
{
    $sz="Medium";
}
else if($value['Size'] == 3)
{
    $sz="Large";
}
else{
    $sz="FREE SIZE";
}
echo "<tr>
	<td style= 'background-color: white;font-size:20px;'>$sr</td>
	<td style= 'background-color: white;font-size:20px;'>$value[Productname]</td>
	<td style= 'background-color: white;font-size:20px;'>$value[Price]</td>
	<td style= 'background-color: white;font-size:20px;'><input class = 'text-center' type = 'number' value = '$value[Qty]' min = '1' max = '10'> </td>
    <td style= 'background-color: white;font-size:20px;'> <input class = 'text-center' type = 'text' value = '$sz' min='small' max='large'></td>
	<form action = 'caart.php' method = 'POST'>
	<td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>REMOVE</button>
	<input type ='hidden' name ='Productname' value ='$value[Productname]'>
    <input type ='hidden' name = 'q1' value ='$value[Qty]'>
	</td>
	</form>
	</tr>";
}
}
?>
</tbody>
</table>
</div>
<div class="col-lg-4">
<div class = "border bg-light rounded p-4">
<h3>TOTAL : </H3>
<h5 class = "text-right"><?php echo $total?></h5>
</div>
</div>
</body>