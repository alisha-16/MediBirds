<html>
    <head>
        <title>SearchPage</title>
    
        <link rel="stylesheet" type="text/css" href="search.css">
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
::placeholder{
    color:rgb(108, 15, 15);
    text-shadow: 0 0 5px white;
    font-size: 20px;
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
margin-top: 27px;
}
ul li a.m{
background-color: darkcyan;
color: #fff;
padding: 5px 20px;
transition: 0.4s ease-in-out;
border: 0;
}
li a.m:hover:not(.active) {
background-color: green;
}

.active {
background-color: #04AA6D;
}

.dropbtn{
  font-size: 20px;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: bold;
  background-color: darkcyan;
color: #fff;
padding: 5px 16px;
border: 0px;

transition: 0.4s ease-in-out;
}
.dropdown {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  float: left;
  overflow: hidden;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a.l {
  background-color: #04AA6D;
  float: none;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a.l:hover {
  background-color: white;
  color: green;
}

.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
    </head>
    <body  >
    
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
                
            </div>

        </header>
        
        <div class="b">
            
        <div class="div1">

		<font id="content">
		<font style="font-weight:bold;font-size:40px;">
		<br><br><center>Search</center><br><br>
		</font>
		<form method ="post" action = "search2.php">
		
    
    <input type="text"  name="n" placeholder="Search product by Name or Category" required><br><br>

	 <input style="font-family:'Garamond';font-size: 30px; " type="submit" id="h" value="Go">
	 
	</form><br><br>
    
	</font>
		
		
		</div>
		</div>
        
      
    </body>
</html>

