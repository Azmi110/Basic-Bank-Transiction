<?php 
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transiction";
  
// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);

  

 if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
  if(isset($_POST['submit'])){ 

        $user=  $_REQUEST['user'];
        $name = $_REQUEST['name'];
        $num =  $_REQUEST['num'];
        
        
        $sql = "INSERT INTO transictions  VALUES 
        ('$user', '$name' ,'$num')";
          
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Transaction Succesfull ... ")</script>';
            header("Location: all_users.php");
           
           
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
         }
         
       
        mysqli_close($conn);
        ?>
