<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Places</title>
    <link rel="stylesheet" href="add_place.css">
</head>
<body>
    <div class="header">
        <div class="item"></div>
        <div class="item1">
            <img src="W.png" alt="">
        </div>
        <div class="item">
            <a href="add_place.html">Add Place</a>
            <a href="add_hotel.html">Add Hotel</a>
            <a href="add_mall.html">Add Mall</a>
        </div>
    </div>
    <div class="main">
        <div class="body">
            <h1>Add Places</h1>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="image_path" placeholder="Image Path">
                <input type="text" name="location" placeholder="Location">
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'city addis';

    $con = mysqli_connect($servername, $username, $password, $db_name);
    if(!$con) {
        die ('cant connect' . mysqli_connect_error());
    } else {
        echo "connected successfully";
    }
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $name = $_POST["name"];
        $image_path = $_POST["image_path"];
        $location = $_POST["location"];

        $sql = "INSERT INTO places (Placesname, Imagepath, Location ) VALUES ('$name', '$image_path', '$location')";
        if (!mysqli_query($con, $sql)) {
            echo "Failed to insert Data";
        } else {
            echo "inserted successfully";
        }
    }
    mysqli_close($con);

    ?>
