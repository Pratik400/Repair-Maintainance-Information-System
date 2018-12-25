<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
    echo "NOT LOGGED IN YET";
  }  
?>


<?php
   if(isset($_GET['id']) && !empty($_GET['id'])){
    echo $_GET['id'] ;
    $aa=$_GET['id'];
    echo $aa ;
    }
 
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sns11";



include("navbar.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
{
    echo "<br><div class='container align-baseline alert-success' > Connected successfully </div  >";
}


$sno=$_POST["sno"];
$nname=$_POST["nname"];
$contactno=$_POST["contactno"];
$email=$_POST["email"];
$pdes=$_POST["pdes"];
$problem=$_POST["problem"];
$comment=$_POST["comment"];
$receivedby=$_POST["receivedby"];
$checkedby=$_POST["checkedby"];
$status=$_POST["status"];

echo $status ;
echo $aa ;
echo $sno ;



echo "<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css' /><br>";

echo "<br><div class='container' >";

echo "<br><a href = '/webapp/repairindex.php'><div class='container btn btn-info btn-group-lg' > Continue </div  ></a>";
echo "<br><br> </div>";



$sql = "UPDATE mainslip
        SET     sno = '$sno' ,
                nname =  '$nname', 
                contactno = '$contactno' ,
                email = '$email' , 
                pdes =  '$pdes' , 
                problem =  '$problem'   ,
                comment =  '$comment',
                receivedby =  '$receivedby' , 
                checkedby = '$checkedby'  ,
                status = '$status' 

        WHERE id = '$aa'";





if ($conn->query($sql) === TRUE) {
    

    echo '<script language="javascript">';
    echo 'alert("info successfully updated"); location.href="repairindex.php"';
    echo '</script>';
   
} else {
    echo "<div class='container alert-danger'>Error: " . $sql . "<br>" . $conn->error. "</div>";
}



$conn->close();
?>
