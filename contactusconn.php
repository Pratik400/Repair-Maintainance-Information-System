<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../webapp/contactus.php');
    exit;
} ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sns11";

session_start();  // needed for sessions.

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
{echo "<br><div class='container align-baseline alert-success' > Connected successfully </div  >";}



$nnname=$_POST["nnname"];

$eemail=$_POST["eemail"];

$message=$_POST["message"];



echo "<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css' /><br>";
echo "<br><div class='container'  >";
include("navbar.php");


$sql = "INSERT INTO messageslip( nnname ,eemail, message) VALUES ('$nnname', '$eemail' , '$message')";
if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Thank You for the review"); location.href="contactus.php"';
    echo '</script>';
   //$url = "contactus.php"; // default page for 

//header("Location: $url"); // perform correct redirect.

} else {
    echo "<div class='container alert-danger'>Error: " . $sql . "<br>" . $conn->error. "</div>";
}


echo "<br><a href = '/webapp/contactus.php'><div class='container btn btn-info btn-group-lg' > BACK </div  ></a>";

$conn->close();
?>
