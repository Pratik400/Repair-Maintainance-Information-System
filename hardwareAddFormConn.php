<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../webapp/hardwareindex.php');
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


$h_name= $_POST["h_name"];
$myselectbox=$_POST['myselectbox'];
$h_price = $_POST["h_price"];
$h_productdes = $_POST["h_productdes"];




echo "<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css' /><br>";
echo "<br><div class='container'  >";


if($myselectbox == "Mouse"){   
$sql = "INSERT INTO hardwaremouse( h_name ,myselectbox, h_price, h_productdes) VALUES ('$h_name' ,'$myselectbox' ,'$h_price', '$h_productdes')";
if ($conn->query($sql) === TRUE) {
    
    $url = "h_mouseindex.php"; // default page for 
 
 header("Location: $url"); // perform correct redirect.
                                }
 else {    echo "<div class='container alert-danger'>Error: " . $sql . "<br>" . $conn->error. "</div>";    }
                            }



elseif($myselectbox == "Keyboard"){
    $sql = "INSERT INTO hardwarekeyboard( h_name ,myselectbox, h_price, h_productdes) VALUES ('$h_name' ,'$myselectbox' ,'$h_price', '$h_productdes')";
if ($conn->query($sql) === TRUE) {
    if(isset($_SESSION['url'])) 
    $url = $_SESSION['url']; // holds url for last page visited.
 else 
    $url = "h_keyboardindex.php"; // default page for 
 
 header("Location: $url"); // perform correct redirect.
                                }
 else {    echo "<div class='container alert-danger'>Error: " . $sql . "<br>" . $conn->error. "</div>";    }
}




else{
   echo "noooooo";}











echo "<br><a href = '/webapp/contactus.php'><div class='container btn btn-info btn-group-lg' > BACK </div  ></a>";




$conn->close();
?>