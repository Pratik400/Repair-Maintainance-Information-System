<?php 
session_start();  // needed for sessions.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sns11";

// PDO  
try{
    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);

} catch(PDOException $e){
    die($e->getMessage());
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
{echo "<br><div class='container align-baseline alert-success' > Connected successfully </div  >";}
