<?php
session_start();
$dbHost = 'localhost';
$dbName = 'transiction';
$dbUsername = 'root';
$dbPassword= '';

$link = mysqli_connect($dbHost , $dbName, $dbUsername, $dbPassword);
 $selectSQL = 'SELECT * FROM `names`';
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Address Line 1</th>
      <th>Address Line 2</th>
      <th>Email Id</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['name']}</td><td>{$row['addr1']}</td><td>{$row['addr2']}</td><td>{$row['mail']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>

?>