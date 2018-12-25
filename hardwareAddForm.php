<?php session_start();?>
<?php

if (isset($_SESSION['uid'])) {
   // echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
    //echo "NOT LOGGED IN YET";
    header("Location: hardwareindex.php");
    
  }  ;  
?>

<?php if(isset($_GET['id']) && !empty($_GET['id'])){
    echo $_GET['id'] ;
    $aa=$_GET['id'];
    //echo $aa ;
    } ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hardware Add Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="animate.css">
    <script src="main.js"></script>

    <style>
body{
	background-color: grey	;
}

</style>
<body>

<?php
include("navbar.php");
?><br><br>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sns11";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
{
  echo "<br><div class='container align-baseline alert-success' >  </div  >";
}


// define variables and set to empty values
$h_nameErr = $h_priceErr = "" ;
$h_name = $h_price = $h_productdes ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["h_name"])) {
    $h_nameErr = "Name is required";
  } else {
    $h_name = test_input($_POST["h_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$h_name)) {
      $h_nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["myselectbox"])) {
    $myselectbox = "myoption1";
  } else {
    $myselectbox = test_input($_POST["myselectbox"]);
    
  }

 

  if (empty($_POST["h_price"])) {
    $h_priceErr = "h_priceE is required";
  } else {
    $h_price = test_input($_POST["h_price"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$h_price)) {
      $h_priceErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["h_productdes"])) {
    $h_productdes = "";
  } else {
    $h_productdes = $_POST["h_productdes"];
  }
  
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }
}

?>

<br><br><br><br>


<div class=" container card">
<h4 class="card-header white-text text-center py-4 text-dark text-monospace"  style="background-color: info;">
        <strong>ADD HARDWARE FORM</strong>
    </h4><br>

 <div class="card-body px-lg-5 pt-0">

<form action="hardwareAddFormConn.php" method="post" class="text-center" style="color: #757575;">
<!-- Name input-->
<div class=" row form-group text-right">
              <label class="col-md-2 control-label font-weight-bold text-dark  " for="h_name">Product Name</label>
              <div class="col-md-10">
                <input id="h_name" name="h_name" type="text" placeholder="Product name"  required pattern="[a-zA-Z\s]+$" title="Only Letters allowed" class="form-control ">
              </div>
            </div>

    <div class=" row form-group text-right">
            <label class="col-md-2 control-label font-weight-bold text-dark " >Category</label>
    <div class="col-md-10">
        <select name="myselectbox" class="custom-select  mb-3">
            <option name="Mouse" value="Mouse">Mouse</option>
            <option name="Keyboard" value="Keyboard">Keyboard</option>
            
        </select>
        </div>
            </div>
           

             <!-- price input-->
             <div class=" row form-group text-right">
              <label class="col-md-2 control-label font-weight-bold text-dark " for="h_price">Price </label>
              <div class="col-md-10">
                <input id="h_price" name="h_price" type="text" placeholder="Enter Price per peice" required class="form-control" pattern="^(0|[1-9][0-9]*)$" title="Only numbers">
              </div>
            </div>
    
            <!-- h_productdes body -->
            <div class="row form-group text-right">
              <label class="col-md-2 control-label font-weight-bold text-dark " for="h_productdes">Product details</label>
              <div class="col-md-10">
                <textarea class="form-control" id="h_productdes" name="h_productdes" placeholder="Please enter your product details here..." rows="5"></textarea>
              </div>
            </div>


<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">ADD</button>
</form>

</div>
</div>



          <br>
<?php
include("footer.php");
?>







</body>
</html>