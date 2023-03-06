<?php session_start(); ?>
<html>
    <head>

        <title>Shop</title>
        <link rel="stylesheet" href="shop.css">
        <link rel="stylesheet" href="footer1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            ::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track { 
  background: forestgreen; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: white; 
  border-radius: 25px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: rgb(144, 67, 0); 
}
            #textbox2{
  text-align: center;
  font-size: 20px;
  width: 90%;
  margin-left:5%;
  border-radius:12px;
  color:#493425;
  border:3px solid #a0c26e;
  font-weight:550;
}
#textbox3{
  text-align: center;
  font-size: 20px;
  width: 78%;
  margin-left:10%;
  color:#493425;
  border:2px solid #a0c26e;
  border-radius:10px;
}
#textbox6{
    text-align: center;
  font-size: 20px;
    color:#493425;
  border:2px solid #a0c26e;
  border-radius:10px;
  }
  #textbox7{
    
    color:#493425;
  border:2px solid #a0c26e;
  border-radius:10px;
  }
.photo img{
  width: 250px;
  
  background-color: #493425;
}
.org{
  margin: 1%;
  margin-top: 5%;
  padding-top: 5%;

  padding-left: 2%;
  padding-right: 2%;
}
.images{
    margin-right: 0%;
    justify-content:space-around;
}
#stylebtn{
    padding: 1%;
  margin-left: 3%;
  margin-right: 1%;
}
.bill{
  background-color: black;
  border: 0;
  color: brown;
  font-size:20px;
}
#mycart{
   float: right;
   margin-top:60px;
   margin-right:2%;
   font-size:20px;
}
a.f1{
    background-color: transparent;
    text-align: left;
 color : darkorange;
 font-family: poppins;
 font-size:21px;
 font-weight: bold;
 padding: 10px;
 border:0;
 border-radius: 0;
 padding-bottom: 0%;
 border-bottom: 2px solid darkorange;
  }
  ul li.h{
list-style-type:none;
margin-left: 5px;
  }
  #textbox4{
      border-radius:25px;
      color:#cef694;background-color: #493425;
      border:2px solid white;
      padding:15px 32px;
  }
  #textbox{
  text-align: center;
  font-size: 18px;
}
        </style>

    </head>
    <body>
    
   
        <header>
            <div class="main">
                <div class="logo">
                    <img src="img/logo2.jpg" alt="">
                </div>
                <div class="menu">
                    <ul class="k">
                        <li class="h" ><a class="m" href="Homepage.html"><u style="color: white;height: 5px;">Home</u></a></li>
                        <li class="h" >
                            <div class="dropdown">
                                <button class="dropbtn"><u style="color: white;height: 5px;">Catalog</u> 
                                </button>
                                <div class="dropdown-content">
                                  <a class="l" href="medicalcatalog.html">Medical Catalog</a>
                                  <a class="l" href="catalogsample.html">Surgical Catalog</a>
                                  <a class="l" href="covidhmpg.html">Covid </a>
                                  <a class="l" href="Plasma.html">Plasma </a>
                                </div>
                            </div>
                        </li>
                        <li class="h"><a class="m" href="aboutus.php"><u style="color: white;height: 5px;">About</u></a></li>
                        <li class="h"><a class="m" href="shop.php"><u style="color: white;height: 5px;">Shop</u></a></li>
                        <li class="h"><div class="dropdown">
                            <button class="dropbtn"><u style="color: white;height: 5px;"> Login </u> 
                            </button>
                            <div class="dropdown-content">
                              <a class="l" href="emplogin1.php">EmployeeLogin</a>
                              <a class="l" href="logout.php">Logout</a>
                            </div>
                        </div></li>
                        <li class="h"><a class="m" href="learn.html"><u style="color: white;height: 5px;">LearnWithUs</u></a></li>
                        <li class="h"><a class="m" href="joinus.php"><u style="color: white;height: 5px;">JoinUs</u></a></li>
                        <li class="h"><a class="m" href="admin1.php"><u style="color: white;height: 5px;">Admin</u></a></li>
                        <li class="h"><a class="m" href="search.php"><u style="color: white;height: 5px;"><i class="fa fa-search"></i></u></a></li>
                   
                    </ul>
                    
                </div>
                <span style="color : white;border:0;border-top:2px;text-align:justify;background-color: teal;font-size:28.6px;font-weight: bold;">
                    <?php
                        echo " welcome to MEDI SHOP ,".$_SESSION['sess'];
                        ?>
                    </span>
            </div>

        </header>

      <br><br>  
      
    <div class="div1">
    
    
        
    </div>
    <?php
		$count = 0;
		if(isset($_SESSION['$cart']))
		{
		  $count=count($_SESSION['$cart']);
		}
		?>
          <a href="mycart.php" id="mycart" class="btn btn-outline-success" >MY CART (<?php echo $count;?>)</a>   
<p>
   <br><br><center><font style="font-size: 80px;font-family: Garamond;font-weight: 500;color:#493425;background-color: #cef694;"><u>OUR PRODUCTS</u></font></center>
   
</p>

<p>
<br><br><br><br><font style="font-size: 50px;font-family: Garamond;font-weight: 500;color:#cef694;background-color: #493425;"><u>SURGICAL PRODUCTS</u></font>
</p> 

   <div class="org">
   
        <div class="images" id="surg">
            <div  class="photo" name="s1">

            <img  src="img/DIGNITY MAGNA.jpg" alt="">
               <pre>
                <div id="stylebtn" >
<form method="post" action="caart.php" >

<input id="textbox2" type="text" name="Productname" value="Dignity Magna" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="355" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Dignity Magna'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
    
<div  class="photo">
<img  src="img/DIGNITY PREMIUM.jpg" alt="">
               <pre>
                <div id="stylebtn">
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Dignity premium" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="395" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>   <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Dignity premium'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            

    
            <div  class="photo">
                <img src="img/DIGNITY PULL UP.jpg" alt="">
               <pre>
                <div id="stylebtn">
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Dignity Pull Up" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="475" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>   <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Dignity Pull Up'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
    </pre>
            </div>

  
                        
            <br><br><div  class="photo">
                <img src="img/DIGNITY OVERNIGHT.jpg" alt="">
               <pre>
                <div id="stylebtn">
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Dignity Overnight" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="520" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Dignity Overnight'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
    </pre>
            </div>
  </div>
            <div class="images">
            <div class="photo">
                <img src="img/MATTEY2.jpg" alt="">
               <pre>
                <div id="stylebtn">
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Mattey Underpads" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="520" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Mattey Underpads'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img style="width:320px;height:250px;" src="img/URINE BAG.jpg" alt="">
               <pre>
               <div id="stylebtn">
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Urine Collection Bag" readonly="readonly" id="text"/><br>          
                <input id="textbox6" type="text" name="p1" value="360" readonly="readonly" size="3" id="text"/>
     <br>    <span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Urine Collection Bag'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
        <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>

            <div class="photo">
                <img src="img/ROMO VAC SET.jpg" alt="">
               <pre>
                <div id="stylebtn">         
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Romo Vac Set" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="355" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Romo Vac Set'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
     <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
  </div>
  </div>
  <p>
<br><br><br><br><font style="font-size: 50px;font-family: Garamond;font-weight: 500;color:#cef694;background-color: #493425;"><u>MEDICAL PRODUCTS</u></font>
</p> 
<div class ="org">
  <div class="images" id="med">          
  <div class="photo">
                <img src="med/img1.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="BPX" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="1500" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'BPX'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            
            <div class="photo">
                <img style = "width:300px;height : 250px" src="med/img2.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="BP10" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="1300" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Dignity premium'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img style ="width:300px;height : 250px" src="med/img3.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="ROMO CHECK PLUSE" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="700" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'ROMO CHECK PLUSE'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="med/img4.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="NOSOR" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="2000" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'NOSOR'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
  </div>
  <div class = "images">
 <div class="photo">
                <img src="med/img5.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Cell Mat" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="5000" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Cell Mat'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="med/img6.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Breast Pump" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="1100" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Breast Pump'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="med/img7.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Spongee Wipes" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="80" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Spongee Wipes'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="med/img8.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Water Wipes" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="90" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Water Wipes'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
  </div>
  </div>
  <p>
<br><br><br><br><font style="font-size: 50px;font-family: Garamond;font-weight: 500;color:#cef694;background-color: #493425;"><u>COVID PRODUCTS</u></font>
</p> 
<div class="org">
  <div class = "images" id="cov">
  <div class="photo">
                <img src="cov/img1.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Turbo Nebulizer" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="1400" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Turbo Nebulizer'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="cov/img2.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Angel Nebulizer" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="1200" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Angel Nebulizer'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="cov/img3.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Oxee Check" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="1300" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Oxee Check'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
  </div>
  <div class = "images">
            <div class="photo">
                <img src="cov/img5.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Dispo Guard" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="74" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Dispo Guard'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
 
  <div class="photo">
                <img src="cov/img6.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Kare Mask" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="60" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Kare Mask'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
 
            <div class="photo">
                <img src="cov/img7.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Jumper Thermometer" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="900" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Jumper Thermometer'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
  
  </div>
            
  <div class = "images">
            <div class="photo">
                <img src="cov/img8.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Klenzo Wipes" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="110" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Klenzo Wipes'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="cov/img9.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Sparklean Wipes" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="160" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Sparklean Wipes'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
  
            <div class="photo">
                <img src="cov/img10.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="Coverall PPE" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="3000" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> 1 </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4 </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "5"> 5 </OPTION >
 </SELECT>  <span id="textbox">SIZE</span>  <SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected"> Free-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'Coverall PPE'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
        </div> 
   </div>

        <p>
<br><br><br><br><font style="font-size: 50px;font-family: Garamond;font-weight: 500;color:#cef694;background-color: #493425;"><u>Plasma</u></font>
</p> 
<div class="org">
  <div class = "images">
  <div class="photo">
                <img src="img/a+.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="A+" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="2200" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'A+'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>

            <div class="photo">
                <img src="img/o+.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="O+" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="2500" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'O+'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="img/b+.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="B+" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="3000" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'B+'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="img/ab+.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="AB+" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="3500" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'A+'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>     
   </div>

   <div class = "images">
  <div class="photo">
                <img src="img/a-.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="A-" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="2000" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'A-'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>

            <div class="photo">
                <img src="img/o-.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="O-" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="3000" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'O-'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="img/b-.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="B-" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="2100" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'B-'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
            <div class="photo">
                <img src="img/ab-.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
                <form method="post" action="caart.php">
<input id="textbox2" type="text" name="Productname" value="AB-" readonly="readonly" id="text"/><br>          
            <input id="textbox6" type="text" name="p1" value="2700" readonly="readonly" size="3" id="text"/>
     <br><span id="textbox">QTY</span>  <SELECT name="q1" id="textbox6" >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1">1L</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> 2L</OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> 3L </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "4"> 4L</OPTION >
 </SELECT>  <span id="textbox">SIZE</span><SELECT name="s1" id="textbox6">
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "0"selected = "selected">No-Size</OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE  = "1"> Small </OPTION>
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "2"> Medium </OPTION >
    <OPTION style="color:#cef694;background-color: #493425;" VALUE = "3"> Large </OPTION >
 </SELECT>
 <br><?php
$link = new mysqli("localhost" , "root" ,"","project");
$sql = "SELECT inv FROM inventory WHERE Productname = 'AB-'";
$res = $link->query($sql);
$numrows = mysqli_num_rows($res);
if($numrows > 0)
{
 while($rows = mysqli_fetch_assoc($res)) 
 {
  ?>
  <br><input id="textbox3" type="text" name="i1"value = "<?php echo $rows['inv']; ?> " readonly="readonly" id="text"/><br>
  <?php
 }
}
$link->close();
?><pre></pre>
    <button id="textbox4" style="font-family:'Garamond';font-size: 24px; "name ="a1" type="submit" class="btn btn-info">Add To Cart</button>
        </div>
    </form>
            </pre>
            </div>
   </div>
       </div>
       <div class="row">
    <div class="column" >
      <img class="k1" src="img/flogo.jpeg" alt="">
      <P CLASS = "f1" style="font-size: 24px;">
        Find the right care right when you need it. Start by choosing your reason for visit, and we'll help you find the right care..
        </p>
    </div>
    <div class="column" >
       <h2  >Quick Links</h2><br>
<dl>
<dt><a class = "f1"  href = "Homepage.html" > HOME </a></dt><br>
<dt><a class = "f1" href = "signin1.php"> CUSTOMER SIGN-IN </a></dt><br>
<dt><a class = "f1" href = "emplogin1.php"> EMPLOYEE LOG-IN </a></dt><br>
<dt><a class = "f1" href = "admin1.php"> ADMIN LOG-IN </a></dt><br>
</dl>
    </div>
<div class="column" >
      <h2 >Popular Links</h2><br>
<dl>
<dt><a class = "f1" href = "shop.php" > SHOP </a></dt><br>
<dt><a  class = "f1" href = "learn.html">LEARN WITH US</a></dt><br>
<dt><a class = "f1" href = "joinus.php"> JOIN US </a></dt><br>

</dl>
    </div>
    <div class="column" >
        <h2>Our Shop</h2><br>
        <dl>
            <dt><a class = "f1" href = "medicalcatalog.html"> MEDICAL DEVICE CATALOG </a> </DT><br>
                <dt><a class = "f1" href = "catalogsample.html"> SURGICAL DEVICE CATALOG </a></DT><br>
                <dt><a class = "f1" href = "covidhmpg.html"> COVID DEVICE CATALOG </a></DT><br>
                <dt><a class = "f1" href = "Plasma.html"> PLASMA</a></DT><br>
        </dl>
      </div>
    </body>
</html>