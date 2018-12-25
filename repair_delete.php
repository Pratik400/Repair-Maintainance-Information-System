<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
    echo "NOT LOGGED IN YET";
    $url = "repairindex.php"; // default page for 

header("Location: $url"); 
  }  ;


  
?>


<?php include("navbar.php"); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sns11";


   if(isset($_GET['id']) && !empty($_GET['id'])){
    echo $_GET['id'] ;
    $aa=$_GET['id'];
    echo $aa ;
    }
 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
{echo "<br><div class='container align-baseline alert-success' > Connected successfully </div  >";}
echo "<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css' /><br>";



echo "<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css' /><br>";

echo "<br><div class='container' >";

echo "<br><a href = '/webapp/repairindex.php'><div class='container btn btn-info btn-group-lg' > Continue </div  ></a>";
echo "<br><br> </div>";

$sql = "DELETE FROM mainslip WHERE id =  $aa;"; 
if ($conn->query($sql) === TRUE) {
    
   /*$url = "repairindex.php";// default page for 
header("Location: $url"); // perform correct redirect.
alert("Successfully Registered");*/
echo '<script language="javascript">';
    echo 'alert("info successfully deleted"); location.href="repairindex.php"';
    echo '</script>';
   
} else {
    echo "<div class='container alert-danger'>Error: " . $sql . "<br>" . $conn->error. "</div>";
}


$conn->close();
?>