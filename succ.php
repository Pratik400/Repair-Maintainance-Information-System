<?php
   if(isset($_GET['id']) && !empty($_GET['id'])){
   // echo $_GET['id'] ;
    $aa=$_GET['id'];
    //echo $aa ;
    }
?>

<?php
session_start();
  
?>


<!DOCTYPE html>
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
            #a{
                background-color: #B6CBCB;
            }

</style>
   
    
</head>
<body>


<?php include("navbar.php");  ?>

<br><br><br>
<?php 
if (isset($_SESSION['uid'])) {
    //echo $_SESSION['uid']." HAS LOGGED IN";
     }
     else{
//echo "NOT LOGGED IN YET";
     }?>


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
{echo "<div class='container align-baseline alert-heading text-right' >  </div >";}


$sql = "SELECT * FROM mainslip WHERE id=$aa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. "<br>";
    //echo "date: " . $row["date"]. "<br>";
    //echo "sno: " . $row["sno"]. "<br>";
    //echo "nname: " . $row["nname"]. "<br>";
    //echo "contactno: " . $row["contactno"]. "<br>";
    //echo "email: " . $row["email"]. "<br>";
    //echo "pdes: " . $row["pdes"]. "<br>";
    //echo "problem: " . $row["problem"]. "<br>";
    //echo "comment: " . $row["comment"]. "<br>";
    //echo "receivedby: " . $row["receivedby"]. "<br>";
    //echo "checkedby: " . $row["checkedby"]. "<br>";
    //echo "status: " . $row["status"]. "<br>";





 
        echo "       <div class='container'>  ";

        if ($row["status"] =='Repaired'){
        echo "  <div class='alert alert-success' role='alert'>   ";
        echo "          This device has been succesfully repaired!   ";
        echo "       </div>   ";}
elseif ($row["status"] =='Not_Repaired'){
        echo "      <div class='alert alert-danger' role='alert'>   ";
        echo "        This device is currently being repaired. Thank you for your patiance.   ";
        echo "    </div>   ";}
elseif ($row["status"] =='Unsuccesful'){
        echo "    <div class='alert alert-warning' role='alert'>   ";
        echo "      This device has not been succesfully repaired!   ";
        echo "    </div>";}

        echo "   <div>  ";




        echo "   <div style='color: black;'>  ";
echo "        <div id='a' class='container border w-100 p-3'>   ";
echo "         <div class='jumbotron'>   ";
echo "             <div class='row container border'>           ";
echo "          <div class='col-sm-6 container border'><center><h3>MAINTAINANCE SLIP</h3></center></div>   ";
echo "      </div>   ";
echo "      <br><br>   ";

echo "      <div class='row container border '>   ";
echo "          <div class='col-xl-12 container border  align-self-stretch'><center><h4> SHRESTHA AND SONS TRADERS <br>address contact<h4></div></center>   ";
echo "      </div>   ";
echo "      <br><br>   ";
   
echo "      <div class='row container border '>   ";
echo "          <div class='col-sm-9 container border col-xs-offset-3'>S.NO:<H2>" . $row["sno"]. " </H2></div><br>   ";

echo "          <div class='col-sm-3 col-xs-offset-3  container border'>DATE:<H2>" . $row["date"]. "<H2></div>   ";
echo "      </div>   ";
echo "      <br><br>   ";

echo "      <div class='box'>   ";
echo "           <div class='row container border'>       ";    
echo "              <div class='col-sm-12 container border'>NAME:<H2> " . $row["nname"]. "</H2></div><br>   ";

echo "              <div class='col-sm-7 container border'>EMAIL: <H2>" . $row["email"]. "</H2> </div>   ";

echo "              <div class='col-sm-5 container border'>CONTACT:<H2> " . $row["contactno"]. "</H2></div>   ";
echo "          </div>   ";
echo "      </div>   ";
echo "      <br><br>   ";

echo "      <div class='row container border'>   ";
echo "          <div class='col-sm-12 container border'>PRODUCT DESCRIPTION: <H3>" . $row["pdes"]. "</H3></div>   ";
echo "      </div>   ";
echo "      <br><br>   ";

echo "             <div class='row container border'>   ";
echo "          <div class='col-sm-12 container border'>PROBLEM:<br><H3> <textarea class='jumbotron w-100 p-3' readonly>   ". $row["problem"]."          </textarea></H3></div>   ";

echo "          <br>   ";
echo "          <div class='col-sm-12 container border'>REMARKS:<br><H3><textarea class='jumbotron w-100 p-3' readonly>   ";
echo $row["comment"];
echo "          </textarea></H3></div>      ";
echo "      </div>           ";
echo "      <br><br>   ";
    
echo "      <div class='row container border'>   ";
echo "          <div class='col-sm-6 container border'> RECEIVED BY:<H2> " . $row["receivedby"]. "</H2></div>   ";
echo "          <div class='col-sm-6 container border'> CHECKED BY: <H2>" . $row["checkedby"]. "</H2></div>   ";
echo "      </div>           ";
echo "  </div>   ";
echo "     </div>   ";
echo "     </div>   ";
    
echo "     </div>   ";

echo "   </div>  ";







    }
} else {
    echo "0 results";
}
$conn->close();



?>







<br>

<?php if(isset($_SESSION['uid'])){ ?>

<div class='container p-1' >

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
{echo "<div class='container align-baseline alert-heading text-right' >  </div >";}

$sql = "SELECT * FROM mainslip WHERE id=$aa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. "<br>";
        $url = "repair_delete.php?id=" . urlencode($row['id']);
        $url2 = "repair_update.php?id=" . urlencode($row['id']);

        echo "<a href='$url' class='btn btn-danger float-right m-1'>DELETE</a>";
         
        echo "<a  href='$url2' class='btn btn-info float-right m-1'>UPDATE</a>";
    }
}
 

 ?>


</div>
<?php  }?>
<br><br><br><br><br>


<?php
include("footer.php");
?>


<body>
</html>