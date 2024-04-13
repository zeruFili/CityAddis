<!DOCTYPE html>
<html lang="en">
  <head>
    <title>hotels</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="hotel.css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/b6cb9759e8.js"></script>
  </head>
  <body>
    <div class="item">


    <div class="head">
    <div class="logo">
      <a href="index.html"><img src="w.png" class="png" alt="cityaddis logo"></a>
    </div>
    <div class="title">
     <h1>Hotels in Addis</h1> 
    </div>
  </div>


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
      
      $sql = "SELECT * FROM hotel";
      $result = $con->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo '<div class="pic">';
        echo '<img src="' . $row["Imagepath"] .'" alt="">';
        echo '<p>' . $row["Hotelname"] . '</p>';
        echo '<div class="rating">';
          echo '<i class="fa fa-star"></i>';
          echo '<i class="fa fa-star"></i>';
          echo '<i class="fa fa-star"></i>';
          echo '<i class="fa fa-star"></i>';
          echo '<i class="fa fa-star"></i>';
         echo '</div>';
        echo '<div class="btn"><a href="">View</a></div>';
      echo '</div>';
        }
      } else {
        echo "0 results";
      }
?>



  </div>
  </div>

  <div class="footer">
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
<hr style="width: 700px; border: none; background: #000; height: 2px;">
<p style="color: rgb(187, 185, 185);"> © Copyright - Cityaddis.com 2022</p>
</center>
  </div>

  </body>
</html>