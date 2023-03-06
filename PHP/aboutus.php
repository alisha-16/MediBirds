<html>
    <head>
        <link rel="stylesheet" type="text/css" href="aboutus.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <style>
            ::-webkit-scrollbar {
  width: 15px;
}

::-webkit-scrollbar-track { 
  background: forestgreen; 
}

::-webkit-scrollbar-thumb {
  background: white; 
  border-radius: 25px;
}

::-webkit-scrollbar-thumb:hover {
  background: rgb(144, 67, 0); 
}
.div5{
    background-image:url(img/ourteam.jpeg); 
width: 100%;
background-size: cover;
background-position: center;
}
.images2{
    display: flex;
  flex-wrap: wrap;
  justify-content:space-evenly;
}
.photo2 img{
    border: 2px groove goldenrod;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    max-block-size: 200px;
    padding : 5px;
    margin-left:2%;
    margin-right: 2%;
  }
#styleH2{
    font-family: Garamond;
    word-wrap: break-word;
    padding-right: 12%;
    padding-left: 12%;
    font-size: 32px;
}
#styleH3{
    text-align:center;
    font-family: Garamond;
    word-wrap: break-word;
    padding-right: 12%;
    padding-left: 12%;
    font-size: 48px;
    color:white;
    font-weight:550;
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
                    <ul>
                        <li><a  href="Homepage.html">Home</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn"><u style="color: white;height: 5px;">Catalog</u> 
                                </button>
                                <div class="dropdown-content">
                                  <a class="h" href="medicalcatalog.html">Medical Catalog</a>
                                  <a class="h" href="catalogsample.html">Surgical Catalog</a>
                                  <a class="h" href="covidhmpg.html">Covid </a>
                                  <a class="h" href="Plasma.html">Plasma </a>
                                </div>
                            </div>
                        </li>
                        <li><a class="active" href="aboutus.php">About</a></li>
                        <li><a href="signin1.php">Shop</a></li>
                        <li><div class="dropdown">
                            <button class="dropbtn"><u style="color: white;height: 5px;"> Login </u> 
                            </button>
                            <div class="dropdown-content">
                              <a class="h" href="signin1.php">Sign in</a>
                              <a class="h" href="signup.php">Sign up</a>
                              <a class="h" href="emplogin1.php">Employee Login</a>
                            </div>
                        </div></li>
                        <li><a href="learn.html">LearnWithUs</a></li>
                        <li><a href="joinus.php">JoinUs</a></li>
                        <li><a href="admin1.php">Admin</a></li>
                    </ul>

                </div>
            </div>
        </header>
        
        <div class="div1">

            <center>
            <font style="color:darkslategrey ; font-family: Poppins; font-size: 50px;"> <u> <b>ABOUT US</b></u></font>
             
    <font style="font-family: 'Times New Roman';font-size: 35px; color: black;" >
        <br> <br>
        MEDIBIRDS, is an exclusive well establised store managed by experienced medical,surgical professionals.
        <br> It is our goal to consistently provide wide range of medical,surgical and covid products as well as services of highest quality at affordable prices.
        <br> We deal in wide range of products that are available online on our website "MEDIBIRDS" to make these tough times little bit simpler for our patients and their loved ones.
    
    </font>
</center>
        </div>
        <div class="divX">
            <center>
                <font style="color:black ; font-family: Poppins; font-size: 50px;font-weight: 100;"> <u> <b>OUR MISSION</b></u></font>
                 
        <font style="font-family:'Garamond';font-size: 35px; color: black;" >
            <br> <br>
            Our ability to serve the emerging needs of our customers with speed and agility makes us a preferred choice in the competitive marketplace.
            <br> <b>Our Mission</b>,is to provide products that promote healing, well-being and safety of patients beacause making healthcare visible is what we do.
        </font>
    </center>
        </div>
        <div class="div2">
            <center>
                <font style="color: white ; font-family:'Lucida Handwriting'; font-size: 50px;font-weight: 100;"> <u> <b>Excellence <br> in <br> Everything !</b></u></font>
    </center>
        </div>
        <div class="div3">
            <img class="c" src="img/Location.jpg" alt="">
        </div>
        <div class="div5">
            <pre>





            
        </pre>
        <p id="styleH3">Our Team</p><br><br>
        <div  class="images2">
               <div style="margin-right:14%;" class="photo2">
                <img  src="img/alisha.jpeg" alt="">
                <br><br><p style="color:white;font-weight:bold;" id="styleH2">Alisha</p>
                </div>
                <div class="photo2">
                    <img style="width:150px;" src="img/anushka.jpeg" alt="">
                    <br><br><p style="color:black;font-weight:bold;" id="styleH2">Anushka</p> <br><br>
                </div>
                </div>
                <div class="images2">
                <div style="margin-right:14%;" class="photo2">
                    <img src="img/sudiksha.jpeg" alt="">
                    <br><br><p style="color:white;font-weight:bold;" id="styleH2">Sudiksha</p>
                </div>
                <div class="photo2">
                    <img src="img/yashi.jpeg" alt="">
                    <br><br><p style="color:black;font-weight:bold;" id="styleH2">   Yashi</p>
                </div>
        </div>
        <pre>










        </pre>


        </div>
        <div class="div4" id="review">
            <center>
            
                <font style="color: white ; font-family:'Times New Roman'; font-size: 70px;font-weight: 100;"> <u> <b>Review Us</b></u></font>
            <br> <font style="font-family:'Garamond';font-size: 30px; color: white;" >We value your feedback ! </font><br><br>
            <p style = "color:red;background-color:transparent;font-size: 30px;"><?php require_once 'messages2.php' ?></p><br>
            <form method="post" action="review.php">
                <font style="font-family:'Garamond';font-size: 40px; color: white;" >Name : </font><input type="text" name="name"  width="40" ><br>
              <br> <font style="font-family:'Garamond';font-size: 40px; color: white;" >Email : </font><input type="email" name="email" width="40" ><br>
              <br> <font style="font-family:'Garamond';font-size: 40px; color: white;" >FeedBack : </font><textarea name="fb" cols="30" rows="10" ></textarea>
              <br><br><input style="font-family:'Garamond';font-size: 40px; color: white;background-color: cornflowerblue;" class="button" type="submit">
            </form>
            </center>

        </div>
        <div class="row">
            <div class="column" >
              <img class="k" src="img/flogo.jpeg" alt="">
              <P CLASS = "f" style="font-size: 24px;">
                Find the right care right when you need it. Start by choosing your reason for visit, and we'll help you find the right care..
                </p>
            </div>
            <div class="column" >
               <h2  >Quick Links</h2><br>
        <dl>
        <dt><a class = "f"  href = "Homepage.html" > HOME </a></dt><br>
        <dt><a class = "f" href = "signin1.php"> CUSTOMER SIGN-IN </a></dt><br>
        <dt><a class = "f" href = "emplogin1.php"> EMPLOYEE LOG-IN </a></dt><br>
        <dt><a class = "f" href = "admin1.php"> ADMIN LOG-IN </a></dt><br>
        </dl>
            </div>
        <div class="column" >
              <h2 >Popular Links</h2><br>
        <dl>
        <dt><a class = "f" href = "signin1.php" > SHOP </a></dt><br>
        <dt><a  class = "f" href = "learn.html">LEARN WITH US</a></dt><br>
        <dt><a class = "f" href = "joinus.php"> JOIN US </a></dt><br>
        
        </dl>
            </div>
            <div class="column" >
                <h2>Our Shop</h2><br>
                <dl>
                    <dt><a class = "f" href = "medicalcatalog.html"> MEDICAL DEVICE CATALOG </a> </DT><br>
                        <dt><a class = "f" href = "catalogsample.html"> SURGICAL DEVICE CATALOG </a></DT><br>
                        <dt><a class = "f" href = "covidhmpg.html"> COVID DEVICE CATALOG </a></DT><br>
                        <dt><a class = "f" href = "Plasma.html"> PLASMA</a></DT><br>
                </dl>
              </div>
    </body>
</html>