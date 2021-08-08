<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>All Users</title>
</head>
<body>
	
   <ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link"  href="bank.html">GRIP</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="bank.html">Home</a>
  </li>
  
   <li class="nav-item">
    <a class="nav-link" href="Transfer.php">Transfer Money</a>
  </li>
   <li class="nav-item">
    <a class="nav-link"  href="all_users.php">All Transactions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="customers.php">customers</a>
  </li>
</ul>

<?php 
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transiction";
  
// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);

  
// Check connectionif ($conn->connect_error) {
    
 if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

$sql = "SELECT user, name, num FROM transictions";
$result = $conn->query($sql);
echo '<div style="overflow-x:auto;">';
echo "<table class=table table-dark table-hover>
<tr>

<th>user name</th>

<th>reciver</th>

<th>ammount</th>

<th>Action<th>
</tr>";

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	echo "<tr>";

  echo "<td>" . $row['user'] . "</td>";

  echo "<td>" . $row['name'] . "</td>";

  echo "<td>" . $row['num'] . "</td>";

  echo "<td><a href=transfer.php><button type= btn  class= btn btn-primary >Transict</button></a></td>";

  echo "</tr>";

}
echo "</table>";
echo '</div>';
} else { echo "0 results"; }
$conn->close();



?>
       
<footer class="footer">
    <div class="container bottom_border" style="margin-top: 7px;">
      <div class="row">

        <div class=" col-sm-4 col-md col-sm-4  col-12 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
          <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s</p>
          <p><i class="fa fa-location-arrow"></i> 704/A h.b Colony Bhopal </p>
          <p><i class="fa fa-phone"></i> +91-9067589784 </p>
          <p><i class="fa fa fa-envelope"></i> helponlinepet@gmail.com </p>
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Help</h5>
          <ul class="footer_ul_amrc">
            <li><a href="#">querry </a></li>
            <li><a href="#">discussion</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">facts</a></li>
            <li><a href="#">Blog Us</a></li>
            <li><a href="#">Connect Us</a></li>
          </ul>
        </div>


        <div class=" col-sm-4 col-md  col-6 col">
          <h5 class="headin5_amrc col_white_amrc pt2">Policy</h5>
          <ul class="footer_ul_amrc">

            <li><a href="#">QnA Policy</a></li>
            <li><a href="#">facts Verification</a></li>
          </ul>
        </div>


        
      </div>
    </div>


    <div class="container">
      <ul class="foote_bottom_ul_amrc">
        <li><a href="">Transfer Money</a></li>
        <li><a href="#">view all customers</a></li>
        <li><a href="#">select customer to transfer money</a></li>
        
      </ul>
      <p class="text-center">Copyright @2020 | Designed by <a href="https://twitter.com/Nikesh55947741"
          target="_blank">V-Developers</a></p>

    </div>

  </footer>
</body>
</html>