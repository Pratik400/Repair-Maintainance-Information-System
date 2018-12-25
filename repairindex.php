<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen"  href="css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="animate.css">

    <style>

            body{
                background-color:grey	;
                
            }

            table{
                
                background-color: white	;
                color: #333; /* Lighten up font color */
                font-family: Helvetica, Arial, sans-serif; /* Nicer font */
                width: 100%; 
                border-collapse:collapse; 
                border-spacing: 0; 
            }

            th, td{
                 
                padding: 15px;
                border:  solid black;
                border-collapse: collapse;
                text-align: center;
                height: 50px;
            }

            tr:hover {background-color: #f5f5f5;}

            th {
                
                background: linear-gradient(#333 0%,#444 100%);
                color: #FFF; 
                font-weight: bold;
                height: 40px;
                text-align: center;
            }
            
</style>
   
  
</head>

<body>




<?php include("navbar.php"); ?> <br><br>

<?php

if (isset($_SESSION['uid'])) {
    //echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
   // echo "NOT LOGGED IN YET";
    
  }  ;  
?>

<?php if(isset($_GET['id']) && !empty($_GET['id'])){
    echo $_GET['id'] ;
    $aa=$_GET['id'];
    echo $aa ;
    } ?>
    


<br>




<!-- SEARCH -->

<form class='container' action='repairindex.php' method='POST'>
  <div class='d-flex flex-row-reverse bd-highlight '>

    <input type="search"  name="search"  class="form-control col-2 float-right  shadow-lg" placeholder="ENTER ID..." required  size="30" >
    <input type="submit" name="submit" class="btn btn-primary  float-right  shadow-lg"  value="SEARCH &raquo;"> 
    
  </div>
</form>

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
{echo "<br><div class='container align-baseline alert-success' >  </div  >";}



if (isset($_POST['search'])) {
    $searchq = $_POST['search'];  

    $sql = " SELECT * FROM mainslip WHERE id LIKE '%$searchq%'";
    $result = $conn->query($sql);

    echo " <div class='container '>"; 
        
    echo "<br><table class='table-active table-striped table-borderless table-hover table-dark shadow-lg' >";
    
    echo "<tr>";
        echo "<th> ID     </th>";
        echo "<th>DATE    </th>";   
        echo "<th>S.No    </th>";
        echo "<th>CONTACT </th>";
        echo "<th>MODEL   </th>";
        
    echo "</tr>";
      
    
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $s_id = $row['id'];
           // $url = "http://localhost/main.php?email=" . urlencode($email_address) . "&eventid=" . urlencode($event_id);
            $url = "succ.php?id=" . urlencode($row['id']);
            echo "<tr>";
            echo "<td> <a href='$url'> ".$row["id"]."</td>";
            echo "<td>".$row["date"]."</td>";        
            echo "<td>".$row["sno"]."</td>";
            echo "<td>".$row["contactno"]."</td>";
            echo "<td>".$row["pdes"]."</td>";
            echo "</tr>";
          }
    }
    else {
        echo "0 results";
        }
    
    echo " </table>";
    echo " </div>";    
    
    $conn->close();
}
  
?>
<!-- SEARCH END -->



<!-- ALL customer list -->

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
echo "<br><br>";

 if(isset($_SESSION['uid'])){ 
echo "<div class='container animated  bounceIn'>
<br><a href = 'repairform.php'><div class='col-sm-12 btn btn-info btn-group-lg' > FIIL A REPAIR FORM </div  ></a></div><br><br>";
 }
 
$sql = "SELECT * FROM mainslip ORDER BY date DESC";
$result = $conn->query($sql);
echo " <div class='container'>";
echo "<div class='animated bounceInDown'> <div style='color:black;' class='jumbotron shadow-lg text-center'> <h4>LIST OF CUSTOMERS</h4> </div></div>";


echo "<br><table class='table-active table-striped table-borderless table-hover table-dark shadow-lg' >";

echo "<tr>";
echo "<th> ID         </th>";
    echo "<th>DATE    </th>";   
    echo "<th>S.No    </th>";
    echo "<th>NAME </th>";
    echo "<th>MODEL   </th>";
    echo "<th>PROBLEM </th>";
echo "</tr>";
  

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $s_id = $row['id'];
       // $url = "http://localhost/main.php?email=" . urlencode($email_address) . "&eventid=" . urlencode($event_id);
        $url = "succ.php?id=" . urlencode($row['id']);
        echo "<tr>";
        echo "<td> <a href='$url'> ".$row["id"]."</td>";
        echo "<td>".$row["date"]."</td>";        
        echo "<td>".$row["sno"]."</td>";
        echo "<td>".$row["nname"]."</td>";
        echo "<td>".$row["pdes"]."</td>";
        echo "<td>".$row["problem"]."</td>";
        echo "</tr>";
      }
}
else {
    echo " 0 results ";
    }

echo " </table>";
echo " </div>";







$conn->close();
?>
<!-- ALL USER END -->
<br><br><br>
<br><br><br>
<?php
include("footer.php");
?>

</body>
</html>