<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Malls.css">
    <script src="https://use.fontawesome.com/b6cb9759e8.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Shoping Centers</title>
</head>
<body>

     <div class="card">
         <!----------Home Page---------->
         <div class="banner">
                 <div class="logo">
                    <a href="index.html"><img src="W.png" alt=""></a>
                 </div>
                  <div class="title1">
                      <h1>Shopping Malls in Addis</h1>
                      <div class="btn1"><a href="#malls">Shop Now</a></div>
                  </div>            
         </div>

         <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>How to make Search box & filter data in HTML Table from Database in PHP MySQL </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>











  
         <!-- retrieve codeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->
              <div class="gallery">
              <?php
                  $servername = 'localhost';
                  $username = 'root';
                  $password = '';
                  $db_name = 'city addis';
              
                  $con = mysqli_connect($servername, $username, $password, $db_name);
                  if(!$con) {
                      die ('cant connect' . mysqli_connect_error());
                  } 

                  $sql = "SELECT * FROM mall";
                  $result = $con->query($sql);

                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo '<div class="pic">';
                         echo '<img src="' . $row["Imagepath"] . '" alt="">';
                        echo  '<p style="font-size: 20px;">' .$row["Mallname"] . '<br><small style="font-size: 15px;">Location | '. $row["Location"] . '</small></p> ';
                         echo '<div class="btn"><a href="">View</a></div>';
                    echo '</div>';
                    }
                  } else {
                    echo "0 results";
                  }
            ?>

       <!---------Footer--------->

    </div>
     </div>
     <div class="footer1">
        <center>
         <div class="row">
             <div class="col-1">
               <h3>Created by</h3>
               <p>This website is developed by Dagim Teshome |<br> Feb 2022</p>
             </div>
             <div class="col-2">
               <h3>Contact Us</h3>
               <li><a href="">Facebook</a></li>
               <li><a href="">Telegram</a></li>
               <li><a href="">Twitter</a></li>
               <li><a href="">Instagram</a></li>
             </div>
             <div class="col-3">
               <h3>Follow Us</h3>
               <div class="icons">
                <a href=""><i class="fa fa-telegram"></i></a>
                <a href=""><i class="fa fa-facebook-official"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
        
              </div>
             </div>
           </div>
        </center>
 
 <center>
 <hr color="white">
 <div class="copyright">
    <p style="color: rgb(255, 255, 255); margin-top: 10px;"> © Copyright - Cityaddis.com 2022</p> 
 </div>

 </center>
</body>
</html>
