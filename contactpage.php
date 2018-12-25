<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Homepage</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="animate.css">
  
<style>
#car{
  color: white; 
  background-image: linear-gradient(to bottom left, #00234C, #211E18);
}

</style>

</head>

<?php
include("navbar.php");
?><br><br><br>
		
    <?php

if (isset($_SESSION['uid'])) {
    //echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
    //echo "NOT LOGGED IN YET";
  }  
?>

<body id="bb">
<div class="animated ">
 <header class="business-header">
      <div class="container">
        <a class="row">
        
          <div class="col-lg-12">
                  
            <h1 class="display-3 text-center text-white mt-4" ><img  class=" img-thumbnail" border="0" alt="W3Schools" src="zz_logo.png" width="80" height="80"> Shrestha & Sons Traders</h1>
          </div>
        </div>
      </div>
    </a></div><br><br><br><br>

<div class="container ">
    <div class="row " style='color: white;'>
        <h2 class="mt-4 "></h2>
            <div class=" col-lg-auto " > 
            </div>
                                   
                        <address>
                        <strong>Shrestha & Sons Traders</strong>
                        <br>Pulchowk, Lalitpur, Nepal
                        <br>Opposite to Madan Smarak School
                        <br> 
                        </address>

                        <hr>
                        <div class=" animated bounceInLeft">
                            <address>
                            <abbr title="Phone">P:</abbr>
                            (+977) 554-8931
                            <br>
                           
                            <abbr title="Email">E:</abbr>
                            <a href="mailto:info@shresthansons.com.np">info@shresthansons.com.np </a>
                            <a class="btn btn-primary btn-sm" href="mailto:info@shresthansons.com.np">EMAIL US &raquo;</a>
                        </div>
                        </address>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<br><br><br><br><br><br>
<?php
include("footer.php");
?>
   
</body>
</html>







