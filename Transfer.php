<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Transfer Money Here</title>
	<style >
		*{
        margin: 5px;

      }
      body{
        background-color: #FFFAFA;
      }
       footer{
        background-color: #A9A9A9;
       }
     
	</style>
</head>
<body>
	<?php 
include 'entries.php'

?>
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
  
</ul>

<form action="entries.php" method="post">
<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <form action="">
                <div class="form-group">
                  
                    <input _ngcontent-c0="" class="form-control form-control-lg" placeholder="Your name" name="user" type="user"  autocomplete="off" required >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Money to Transfer(Reciver)" name="name" type="name">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" placeholder="Amount To Transfer" name="num" type="number">
                </div>
                <div class="form-group">
                    <input class="btn btn-info btn-lg btn-block" type="submit" name="submit" value="Pay" />
                </div>
            </form>
        </div>
    </div>
</div>
</form>
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