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
    echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
    echo "NOT LOGGED IN YET";
  }  
?>
<body id="bb">
<div class="animated bounce">
 <header class="business-header">
      <div class="container">
        <a class="row">        
          <div class="col-lg-12">                  
            <h1 class="display-3 text-center text-white mt-4" ><img  class=" img-thumbnail" border="0" alt="W3Schools" src="zz_logo.png" width="80" height="80"> Shrestha & Sons Traders</h1>
          </div>
        </div>
      </div>
    </a></div>

        <div class="container">

<div class="row" style='color: white;'>
  <div class="col-sm-8">
    <h2 class="mt-4"   >Our Services</h2>
    <p>We are pioneer in laptop repairing service in Nepal. We do chip level maintenance of mother.Repair dead motherboards as well as other chip level maintenance services.Cleaning physical dirt, removing virus, deleting unnecessary files from laptop</p>
    <p>
      <a class="btn btn-primary btn-md" href="mailto:info@shresthansons.com.np">EMAIL US &raquo;</a>
    </p>
  </div>
  <div class="col-sm-4">
    <h2 class="mt-4">Contact Us</h2>
    <address>
      <strong>Shrestha & Sons Traders</strong>
      <br>Pulchowk, Lalitpur, Nepal
      <br>Opposite to Madan Smarak School
      <br>
    </address>
    <address>
      <abbr title="Phone">P:</abbr>
      (+977) 554-8931
      <br>
      <abbr title="Email">E:</abbr>
      <a href="mailto:info@shresthansons.com.np">info@shresthansons.com.np </a>
    </address>
  </div>
</div>
<!-- /.row -->





<div class="row " >
  <div class="col-sm-4 my-4" >
    <div class="card" id="car">
      <img class="card-img-top" src="zz_printer.png" alt="">
      <div class="card-body" >
        <h4 class="card-title" >Printer Repair</h4>
        <p class="card-text">NRs. 500 - above
          <br>Repair printers and printer parts, refill cartridges.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 my-4">
    <div class="card"  id="car">
      <img class="card-img-top" src="zz_ser.png" alt="">
      <div class="card-body">
        <h4 class="card-title">Laptop Servicing</h4>
        <p class="card-text ">NRs. 1500
          <br>Cleaning physical dirt, removing virus, enhance laptop's performance and durability.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>  
  <div class="col-sm-4 my-4">
    <div class="card"  id="car">
      <img class="card-img-top" src="zz_laptop.png" alt="">
      <div class="card-body">
        <h4 class="card-title">Laptop Repairing</h4>
        <p class="card-text">NRs. 2,500 - above
        <br>Repair dead motherboards as well as other chip level maintenance services.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div> 
</div>
<!-- /.row -->
</div>
<!-- /.container -->
<?php
include("footer.php");
?>   
</body>
</html>







