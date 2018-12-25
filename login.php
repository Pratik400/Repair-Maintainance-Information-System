<?php
session_start();
if (isset($_SESSION['uid'])) 
{ 
header('location:home.php');
} 
else{
  echo "NOT LOGGED IN YET";
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="animate.css">
    <script src="main.js"></script>
    <style>
    

    body {

  color:white;
  
  background:grey 
}
form {
 	background:#111; 
  width:80%;
  margin:30px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
  display:block;
  padding:10px 15px 25px 15px;
}

form h1 {
    background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
  border-radius:0.2em;
}

label {
 	color:#666;
  display:block;
  padding-bottom:9px ;
  
  font-size:14px;
  padding-left:3px;

}

input[type=text],
input[type=password] {
 	width:100%;
  padding:8px 5px;
  background:linear-gradient(#1f2124, #27292c);
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
  font-size:14px;
}

input[type=submit] {
 	
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  
  border-radius:0.3em;
  
  color:white;
  float:right;
  font-weight:bold;
  cursor:pointer;
  }
  span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:85px;
}

  input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password] {
 	background:#27292c;
}
    </style>
</head>

<body>



<?php
include("navbar.php");
?>
<br><br><br><br><br>





<form action="login.php" method= "POST">
  <h1 style='color: WHITE;'>Admin Log in</h1><br>
  <div class="container">
  <p>
    <label for="uname" >ADMIN</label>
    <input type="text" name="uname" id="uname" placeholder="Enter Username" required>
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password" placeholder="Enter Password" required>
  </p>
 
  </div>
  <br>
  <p class="container">
    <span class="btn btn-sm">Forgot password ?</span>
    <input class="btn btn-info" type="submit" name="go" id="go" value="Log in">
  </p>
</form>

<?php
include("footer.php");
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sns11";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
{
  echo "<br><div class='container align-baseline alert-success' > Connected successfully </div  >";
}

if(isset($_POST['go'])){
  $admn = $_POST['uname'];
  $pas = $_POST['password'];
  $sql = "SELECT * FROM `admin` WHERE `uname` = '$admn' AND `password` = '$pas';";
  $run = mysqli_query($conn,$sql);
  $row = mysqli_num_rows($run);

  if($row < 1){?>
  <script> alert('incorrect login');
  window.open('/webapp/login.php','_self');
   </script>
<?php
  }
  else{
     $data = mysqli_fetch_assoc($run);
     $id = $data['id'];
     echo $id;
  
     $_SESSION['uid']=$id;?>
     <meta http-equiv="refresh" content="0;url=home.php">
     <?php
  }
}
?>


    
</body>
</html>