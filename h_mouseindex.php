<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

        <link rel="stylesheet" type="text/css" media="screen"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="animate.css">

    <style>

            body{
                background-color: grey	;
                 }
                 
            #qq{
                background-color: black	;
                 }

            #main {                
                border: 1px solid #CEEFFF;
                margin-bottom: 20px;
                margin-top: 10px;
                background: #fff;
                padding: 11px 19px 10px 20px;
                position: relative;
                -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
                box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);
                }

            #info { 
                border-bottom: 1px solid #dfe5e9;
                padding-bottom: 17px;
                padding-left: 16px;
                padding-top: 16px;
                position: relative;
                background: #fff;
                }

            #aa { 
                color: #2f383d;
                font-size: 15px;
                line-height: 19px;
                text-decoration: none;
                padding-left: 20;
                margin-left: 0;
                }
            
            #description { 
                font-size: 12.5px;
                line-height: 20px;
                padding: 10px 14px 16px 19px;
                background:  #EBF8FE;
                box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);;
                }          

            #info .name {
                margin-top: 0;
                margin-bottom: 0;
                }

            #info .price {
                font-size: 24px;
                margin: 0;
                font-weight: 300;
                padding-bottom: px;
                }



</style>
   
    <script src="main.js"></script>


</head>
<body>
    

    <?php
include("navbar.php");
?>
<br><br>
<?php if (isset($_SESSION['uid'])) {
    //echo $_SESSION['uid']." HAS LOGGED IN";
  }
  else{
   // echo "NOT LOGGED IN YET";
  }  ?>



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



echo "<br><a class='container' href = '/webapp/hardwareindex.php'><div class=' btn btn-info btn-group-lg' > BACK </div  ></a><br>";

$sql = "SELECT * FROM hardwaremouse";
$result = $conn->query($sql);
echo " <div class='container'>";
echo "<div class='animated zoomInRight'> <div class='bg-light shadow-lg text-center border-white' style='color: black;'> <h4>Mouse</h4> </div></div>";
echo"<div class='container'>";
echo"<div class='row'>";
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {





echo "<div class='box col-md-6' style='color: black;'>";
echo "<hr>";

echo "	<div id='main'>";
echo "		<div class='row'>";

echo "			<div class='col-md-5 col-sm-12 col-xs-12'>";
echo "					<div> ";
echo "						<img src='http://ecx.images-amazon.com/images/I/41esqaf0xmL.jpg' class='img-fluid'> ";
echo "						<span class='tag2 hot'> HOT </span>";
echo "					</div>";
echo "			</div>";

echo "		<div class='col-md-7 col-sm-12 col-xs-12'>";
echo "  			<div id='info'>";
echo "	    				<h5 class='name'>";
echo "	    					<a id='aa' href=''>".$row["h_name"]."</a><br>";
echo "	    					<a id='aa' href=''>";
echo "	    						<small>".$row["myselectbox"]."</small>";
echo "	    					</a>                       ";   
echo "	    				</h5>";
echo "	    				<p class='price'>";
echo "		    				<span>RS.".$row["h_price"]."</span>";
echo "			    		</p>";
echo "				    	<span></span> ";
echo "	    		</div>";

echo "		    	<div id='description'>";
echo "			    	<p>".$row["h_productdes"]."</p>";
echo "  			</div>";

echo "	    		<div id='info'>";
echo "		    		<div class='row'>";
echo "			    		<div class='col-md-12'> ";
//echo "				    		<a href='' class='btn btn-danger'>Add to cart</a>";
echo "                          <a href='/webapp/contactpage.php' class='btn btn-info'>Call us to Order</a>";    
echo "	    				</div>";						
echo "		    		</div>";

if(isset($_SESSION['uid'])){ 
    echo "		    		<div class='row p-2'>";
    echo "			    		<div class='col-md-12'> ";
   // echo "                          <a  href='' class='btn btn-danger'>DELETE</a>";
   // echo "                          <a  href='' class='btn btn-info '>EDIT</a>"; 
    echo "	    				</div>";						
    echo "		    		</div>";
    }


echo "			    </div>";

echo "		</div>";
echo "	</div>";
echo "</div>";        
echo "</div>";


}
}
else {
    echo "0 results";
    }

echo "</div>";        
echo "</div>";
echo "</div>";
?>





<?php
include("footer.php");
?>
</body>
</html>