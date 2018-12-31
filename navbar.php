
<link rel="stylesheet" href="animate.css">
<style>
body{
	background-image: url(".jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-color:#1a1a1d;
  color: red;
}

 nav{
   z-index: 8;
  position:fixed;
  background-image: linear-gradient(to bottom right, #222629, #00234C);
  
  }

.navbar {
    /*opacity: 0.3;    filter: alpha(opacity=30);  For IE8 and earlier */
position:fixed;
width:100%;
padding-left: 80px;
padding-right: 0px;
padding-top: 0px;
padding-bottom: 0px;
 } 

.nav-item{
	background-color: ;
}

nav a {
    display: block;
    color: white; /*text color*/
    padding: 70px 0px;
    text-decoration: none;
}
nav a.active {
    background-color: #4CAF50;
    color: white;
}

nav a:hover:not(.active) {
  
    background-color: #FFA302;
    box-shadow: 2px 2px 1px grey;
    color: white;
    height:100%;
}

li a {
    display: block;
    color: white; /*text color*/
    padding: 70px 0px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #FFA302;
    color: white;
    height:100%;
}
#nn{
  width: 100%;
  background-color: #D4D2D2;
}
#ll{
  float:right;
}

</style>



<nav class="navbar navbar-expand-lg ">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


          <a class="navbar-brand" href="/webapp/home.php"> <img border="0" alt="W3Schools" src="zz_logo.png" width="50" height="50"> Shrestha & Sons Traders</a>

          <button class="navbar-toggler border-info" type="button " data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" carousel-control-next-icon"></span>
          </button>

          <div class="collapse navbar-collapse  col-7" id="navbarNavDropdown">

            <ul class="navbar-nav">

          <!-- <li class="nav-item">
                <a class="nav-link" href="/webapp/home.php">Home <span class="sr-only">(current)</span></a>
              </li>-->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <!--  <a class="dropdown-item" href="/webapp/repair.php">Repair</a>-->
                  <a class="dropdown-item" href="/webapp/repairindex.php">Repair</a>
                  <a class="dropdown-item" href="/webapp/hardwareindex.php">Hardwares</a>
                  <a class="dropdown-item" href="/webapp/softwareindex.php">Softwares</a>
                   <!--   <a class="dropdown-item" href="/">Support</a>-->
                </div>
              </li>
            
              
             <li class="nav-item">
              <a class="nav-link" href="/webapp/contactpage.php">Contact</a>
            </li>

              <li class="nav-item"><div class="animated wobble">
                <a class="nav-link" href="/webapp/contactus.php">Reviews</a>
              </li>
          
              </ul>
              </div>


          </div>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">

              <ul class="navbar-nav border">
              
                  <li id="login" class="nav-item border" >
                    <a class="nav-link" href="/webapp/login.php">LOGIN</a>
                    
                  </li>
                  

                  
                  <li id="logout" class="nav-item border" >
                    <a class="nav-link" href="/webapp/logout.php">LOGOUT</a>
                  </li>
                  
              </ul>

            </div>
          
</nav>
</div>
