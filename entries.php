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
  if(isset($_POST['submit'])){ 

        $user=  $_REQUEST['user'];
        $name = $_REQUEST['name'];
        $num =  $_REQUEST['num'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO transictions  VALUES 
        ('$user', '$name' ,'$num')";
          
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Transaction Succesfull ... ")</script>';
            echo '<h1 style="color:green" >Click hear to go back to home page <a href ="bank.html" >click here</a> </h1>';
           /* echo nl2br("\n$user\n $name\n "
                . "$num\n ");*/
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
         }
         
        // Close connection
        mysqli_close($conn);
/*}
      // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}*/

?>
