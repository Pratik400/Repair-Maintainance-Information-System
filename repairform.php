
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Repair Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="animate.css">

    <style>

            body{
                background-color: grey	;
            }
            #cnt{
              background-color: #BEBDBC	;
            }

</style>
   
    <script src="main.js"></script>
</head>
<body>
<?php
include("navbar.php");


// define variables and set to empty values
$snoErr = $nnameErr = $contactnoErr = $emailErr = $pdesErr = $receivedbyErr = $checkedbyErr = "";
$sno = $nname = $contactno = $email = $pdes = $problem = $comment = $receivedby = $checkedby = $status ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["sno"])) {
    $snoErr = "S.No is required";
  } else {
    $sno = test_input($_POST["sno"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$sno)) {
      $snoErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["nname"])) {
    $nnameErr = "Name is required";
  } else {
    $nname = test_input($_POST["nname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nname)) {
      $nnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["contactno"])) {
    $contactnoErr = "Contact is required";
  } else {
    $contactno = test_input($_POST["contactno"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$contactno)) {
      $contactnoErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }


  if (empty($_POST["pdes"])) {
    $pdes = "";
  } else {
    $pdes = test_input($_POST["pdes"]);
  }

  if (empty($_POST["problem"])) {
    $problem = "";
  } else {
    $problem = test_input($_POST["problem"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["receivedby"])) {
    $receivedbyErr = "Recived by is required";
  } else {
    $receivedby = test_input($_POST["receivedby"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$receivedby)) {
      $receivedbyErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["checkedby"])) {
    $checkedbyErr = "Checked by is required";
  } else {
    $checkedby = test_input($_POST["checkedby"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$checkedby)) {
      $checkedbyErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["status"])) {
    $status = "myoption1";
  } else {
    $status = test_input($_POST["status"]);
    
  }




}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<br><br><br><br><br><br>
<div class="animated pulse">
<div id="cnt" class="container"  style='color: black;'>
<br>
  <center><h2>MAINTAINANCE SLIP</h2></center>

  <form  method="post" action="repairconn.php">
              <div class="form-group">
                    Date:  <input type="date" class="form-control" name="date" rows="1" readonly value="<?php echo date('Y-m-d'); ?>" >
              <br></div>

              <div class="form-group">
                    S.No: <input required  type="text" class="form-control" name="sno" rows="1" style="width:100% !important"  required value="<?php echo $sno;?>" required pattern="^(0|[1-9][0-9]*)$" title="Only numbers"/>
                    <span class="error"> <?php echo $snoErr;?></span>
              <br></div>

              <div class="form-group">
                    Name: <input required type="text" class="form-control" name="nname" style="width:100% !important"  required  value="<?php echo $nname;?>" placeholder="Name" required pattern="[a-zA-Z\s]+$" title="Only Letters allowed"  >
                    <span class="error"> <?php echo $nnameErr;?></span>
              <br></div>

              <div class="form-group">
                    Contact No: <input type="text" class="form-control" name="contactno" style="width:100% !important" required  value="<?php echo $contactno;?>" pattern="^(0|[1-9\s][0-9\s]*)$" title="Only numbers" >
                    <span class="error"><?php echo $contactnoErr;?></span>
              <br></div>

              <div class="form-group">
                    E-mail: <input type="text" class="form-control" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required value="<?php echo $email;?>">
                    <span class="error"><?php echo $emailErr;?></span>
              <br></div>

              <div class="form-group">
                    Product Description: <input required type="text" class="form-control" name="pdes" style="width:100% !important"  required  value="<?php echo $pdes;?>" placeholder="Product Model"  >
                    <span class="error"> <?php echo $pdesErr;?></span>
              <br></div>
              
              <div class="form-group">
                    Problem: <textarea name="problem" rows="5" cols="20" class="form-control"><?php echo $problem;?></textarea>
              <br></div>

              <div class="form-group">
                     Comment: <textarea name="comment" rows="5" cols="40" class="form-control"><?php echo $comment;?></textarea>
              <br></div>

              <div class="form-group">
                    Received By: <input type="text" class="form-control" name="receivedby" value="<?php echo $receivedby;?>" required pattern="[a-zA-Z\s]+$" title="Only Letters allowed">
                    <span class="error"> <?php echo $receivedbyErr;?></span>
              <br></div>

              <div class="form-group">
                    Checked By: <input type="text" class="form-control" name="checkedby" value="<?php echo $checkedby;?>" required pattern="[a-zA-Z\s]+$" title="Only Letters allowed">
                    <span class="error"><?php echo $checkedbyErr;?></span>
              <br></div>  

              <div class="form-group">Status:            
              <select name="status" class="custom-select  mb-3">
                <option name="Repaired" value="Repaired">                  Repaired</option>
                <option selected name="Not_Repaired" value="Not_Repaired"> Not Repaired</option>
                <option name="Unsuccesful" value="Unsuccesful">            Unsuccesful</option>     
              </select>               
              <br></div> 
                    
                    <input class="btn btn-success" type="submit" name="submit" value="Submit"> 
                    <input class="btn btn-dark" type="reset">     
     </form>  <br>   <br>   
  </div>
 
          <hr>
</div>

         
<?php
include("footer.php");
?>
     
</body>


</html>
