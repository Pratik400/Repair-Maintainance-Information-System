<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="animate.css">
    <script src="main.js"></script>

    <style>
body{
	background-color: grey	;
  
}

#cc{
    width: 100%;
    height: 470px;
    background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(192,192,192,0.3));
    box-shadow:0 0px 33px #EBF8FE;
    border-radius:0.3em;
}

input[type=text],
textarea {
 	width:100%;
  padding:8px 5px;
  color: blue;
 
  
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
  font-size:14px;
}




}
</style>
</head>

<body>

<?php
include("navbar.php");
?>
<br><br>

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
  echo "<br><div  >  </div  >";
}


// define variables and set to empty values
$nnnameErr = $eemailErr= "";
$nnname= $eemail = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nnname"])) {
    $nnnameErr = "Name is required";
  } else {
    $nnname = test_input($_POST["nnname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nname)) {
      $nnnameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["eemail"])) {
    $eemailErr = "";
  } else {
    $eemail = test_input($_POST["eemail"]);
    // check if e-mail address is well-formed
    if (!filter_var($eemail, FILTER_VALIDATE_EMAIL)) {
      $eemailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = $_POST["message"];
  }
  

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }
}

?>


<br>
<!-- Large modal 
<center><button  type="button" class="container btn btn-outline-primary btn-rounded btn-block my-4 waves-effect z-depth-0 " style="background-color: #FFA302;" data-toggle="modal" data-target=".bd-example-modal-lg"></button></center>-->


<div >
<button class="container btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" data-toggle="modal" data-target=".bd-example-modal-lg">I Want to Leave a Message</button>
</div>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="container">
	<hr>
<br>
 <form class="form-horizontal" style="color: black;" action="contactusconn.php" method="post">
          
 <h5 class="card-header white-text text-center py-4"  style="background-color: info;">
        <strong>Contact Us</strong>
    </h5><br>
    
            <!-- Name input-->
            <div class=" row form-group text-right">
              <label class="col-md-2 control-label" for="nnname">Name</label>
              <div class="col-md-10">
                <input id="nnname" name="nnname" type="text" placeholder="Your name" class="form-control" required pattern="[a-zA-Z\s]+$" title="Only Letters allowed">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="row form-group text-right">
              <label class="col-md-2 control-label" for="eemail">Your E-mail</label>
              <div class="col-md-10">
                <input id="eemail" name="eemail" type="text" placeholder="Your email" class="form-control" required>
              </div>
            </div>
    
            <!-- Message body -->
            <div class="row form-group text-right">
              <label class="col-md-2 control-label" for="message">Your message</label>
              <div class="col-md-10">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">DONE</button>
              </div>
            </div><br>
      
          </form>
        
         
          </div>
    </div>
  </div>
</div>
<!-- Large modal END -->
  <br>

<br><br>






<?php

$sql = "SELECT * FROM messageslip ORDER BY id DESC";
$result = $conn->query($sql);

echo " <div class='container'>";
echo "<div class='animated bounceInDown'><div class='jumbotron shadow-lg text-center' style='color: black;'><h2>COMMENTS FROM OUR CUSTOMERS</h2></div></div>";

echo "<br><div class='row ' >";
   
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        
          echo " <div class='card col-md-4 border-info pl-4' style='width: 18rem;'>";
       
            echo "<div class='card-body' style='color: black; background-color: #feffff'>";

                echo " <a class='card-link' style='color: blue;' >Review No. ". $row["id"]." </a>";
                echo "<br>  <HR><h5 class='card-text'>". $row["message"]."</h5><HR>";                   
                echo "  <h6 class='card-title text-right'>". $row["nnname"]."</h6>";
                echo "  <h6 class='card-subtitle mb-2 text-muted blockquote-footer text-right'><small>". $row["eemail"]."</small></h6><HR>";                                        
            
             echo " </div>";

          echo " </div><HR>";
      }
  } else {
      echo "0 results";
  }

echo " </div><br>";

echo " </div>";


?>
<hr><br><br><br><br><br><br><br>



<?php
include("footer.php");
?>
    
</body>
</html>