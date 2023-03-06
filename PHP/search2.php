<html>
    <head>
        <title>SearchPage</title>
    
        <link rel="stylesheet" type="text/css" href="search.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            th{
        background-color: white;
    }
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
body{
  background-image: url("img/green.jpeg");
	background-size:cover;
	block-size:300px;
  background-repeat: no-repeat;
  overflow-x:hidden;
	height: 300px;
  background-repeat: repeat-y;
  position: relative;
}
header{ 
  font-size: 20px;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: bold;
  position: fixed; 
width: 100%;
background-size: cover;
background-position: center;
background-color: darkcyan;
}
.menu{
width: 400px;
float: left;
height: 70px;
}
ul.k{
float: left;
display: flex;
justify-content: center;
align-items: center;
word-wrap: break-word;
}
ul li.h{
list-style-type:none;
margin-left: 5px;
margin-top: 40px;
}
ul li a.m{
background-color: darkcyan;
color: #fff;
padding: 10px 28px;
transition: 0.4s ease-in-out;
border: 0;
}
li a.m:hover:not(.active) {
background-color: green;
}

.active {
background-color: #04AA6D;
}


        </style>
    </head>
    <body  >
    <header>
            <div class="main">
                <div class="logo">
                    <img src="img/logo2.jpg" alt="" usemap = "#hmap">
                    <map name = "hmap">
                <area shape = "circle" coords = "0,0,280,250" href = "search.php">
                </map>
                </div>
                <div class="menu">
                    <ul class="k">
                        <li class="h" ><a class="m" href="Homepage.html"><u style="color: white;height: 5px;">Home</u></a></li>
                        <li class="h" ><a class="m" href="medicalcatalog.html"><u style="color: white;height: 5px;">Catalog</u></a></li>
                        <li class="h"><a class="m" href="aboutus.php"><u style="color: white;height: 5px;">About</u></a></li>
                        <li class="h"><a class="m" href="shop.php"><u style="color: white;height: 5px;">Shop</u></a></li>
          
                        <li class="h"><a class="m" href="learn.html"><u style="color: white;height: 5px;">LearnWithUs</u></a></li>
                        <li class="h"><a class="m" href="joinus.php"><u style="color: white;height: 5px;">JoinUs</u></a></li>
                        <li class="h"><a class="m" href="admin1.php"><u style="color: white;height: 5px;">Admin</u></a></li>
                        <li class="h"><a class="m" href="search.php"><u style="color: white;height: 5px;"><i class="fa fa-search"></i></u></a></li>
                    </ul>
                    
                </div>
                
            </div>

        </header>
        
        <div class="b">
            
        <div class="div1">

		<font id="content">
		<font style="font-weight:bold;font-size:40px;">
		
		<center>Search</center><br><br>
		</font>
		<form method ="post" >
	
    <input style="font-size:20px;" type="text"  name="n" placeholder="Search product by Name or Category" required><br><br>

	 <input style="font-family:'Garamond';font-size: 30px; " type="submit" id="h" value="Go">
	 
	</form><br><br>
    <table class = "table">
<thead class = "text-center">
<th style= "background-color: white;font-size:20px;" scope = "col" > Product Name </th>
<th style= "background-color: white;font-size:20px;" scope = "col" > Price </th>
<th style= "background-color: white;font-size:20px;" scope = "col" > </th>
<tr>
</thead>
<tbody class = "text-center">
    <?php
     $link = mysqli_connect("localhost" , "root" ,"","project");
     if($link === false)
     {
      echo("ERROR :could not connect . " .$link->connect_error);
     }
     $sql1 = "SELECT * FROM surgical WHERE Sname='$_POST[n]' ";
     $res=$link->query($sql1);
     $numrows=mysqli_num_rows($res);
     if ($numrows > 0) 
     {   
         while($row = mysqli_fetch_assoc($res)) 
         {
             echo"
             <tr>
             <td style= 'background-color: white;font-size:20px;'>$row[Sname]</td>
             <td style= 'background-color: white;font-size:20px;'>$row[Sprice]</td>
             <form action = 'shop.php#surg' method = 'POST'>
             <td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>Buy Now</button>
             </td>
             </form>
             </tr>";
         }
     }
     $sql2 = "SELECT * FROM medical WHERE Mname='$_POST[n]' ";
     $res=$link->query($sql2);
     $numrows=mysqli_num_rows($res);
     if ($numrows > 0) 
     {   
         while($row = mysqli_fetch_assoc($res)) 
         {
             echo"
             <tr>
             <td style= 'background-color: white;font-size:20px;'>$row[Mname]</td>
             <td style= 'background-color: white;font-size:20px;'>$row[Mprice]</td>
             <form action = 'shop.php#med' method = 'POST'>
             <td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>Buy Now</button>
             </td>
             </form>
             </tr>";
         }
     }
     $sql3 = "SELECT * FROM covid WHERE Cname='$_POST[n]' ";
     $res=$link->query($sql3);
     $numrows=mysqli_num_rows($res);
     if ($numrows > 0) 
     {   
         while($row = mysqli_fetch_assoc($res)) 
         {
             echo"
             <tr>
             <td style= 'background-color: white;font-size:20px;'>$row[Cname]</td>
             <td style= 'background-color: white;font-size:20px;'>$row[Cprice]</td>
             <form action = 'shop.php#cov' method = 'POST'>
             <td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>Buy Now</button>
             </td>
             </form>
             </tr>";
         }
     }
     $chk = $_POST['n'];
        if($chk == 'surgical' || $chk == 'Surgical')
        {
            $sql = "SELECT * FROM surgical ";
            $res=$link->query($sql);
            $numrows=mysqli_num_rows($res);
            if ($numrows > 0) 
            {   
                while($row = mysqli_fetch_assoc($res)) 
                {
                    echo"
                    <tr>
                    <td style= 'background-color: white;font-size:20px;'>$row[Sname]</td>
                    <td style= 'background-color: white;font-size:20px;'>$row[Sprice]</td>
                    <form action = 'shop.php' method = 'POST'>
                    <td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>Buy Now</button>
                    </td>
                    </form>
                    </tr>";
                }
            }
            $link->close();
                

        }
        if($chk == 'medical' || $chk == 'Medical')
        {
            $sql = "SELECT * FROM medical ";
            $res=$link->query($sql);
            $numrows=mysqli_num_rows($res);
            if ($numrows > 0) 
            {   
                while($row = mysqli_fetch_assoc($res)) 
                {
                    echo"
                    <tr>
                    <td style= 'background-color: white;font-size:20px;'>$row[Mname]</td>
                    <td style= 'background-color: white;font-size:20px;'>$row[Mprice]</td>
                    <form action = 'shop.php' method = 'POST'>
                    <td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>Buy Now</button>
                    </td>
                    </form>
                    </tr>";
                }
            }
            $link->close();
                

        }
        if($chk == 'covid' || $chk == 'Covid')
        {
            $sql = "SELECT * FROM covid ";
            $res=$link->query($sql);
            $numrows=mysqli_num_rows($res);
            if ($numrows > 0) 
            {   
                while($row = mysqli_fetch_assoc($res)) 
                {
                    echo"
                    <tr>
                    <td style= 'background-color: white;font-size:20px;'>$row[Cname]</td>
                    <td style= 'background-color: white;font-size:20px;'>$row[Cprice]</td>
                    <form action = 'shop.php' method = 'POST'>
                    <td style= 'background-color: white;font-size:20px;'><button name = 'bt1' class ='btn btn-sm btn-outline-danger'>Buy Now</button>
                    </td>
                    </form>
                    </tr>";
                }
            }
            $link->close();
                

        }
    ?>
	</font>
		
		
		</div>
		</div>
        
      
    </body>
</html>

