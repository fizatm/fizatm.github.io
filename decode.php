<?php

    //Create and Verify Connection
    $connect = new mysqli('mysql4.000webhost.com', 'a2040150_shorts', '1234567a', 'a2040150_urls');
    if ($connect -> connect_error)
    {
        die("Connection Failed" . $connect -> connect_error);
    }

    $decipher = $_POST["decode"];
    $decode = $connect -> real_escape_string($decipher);
    
    $codecall = "SELECT * from ShortURLs WHERE shorturl = '$decode'";

    $result = mysqli_query($connect, $codecall) or die (mysqli_error());
			

    while($row = mysqli_fetch_array($result))
    {
        $fullform = $row['FullURL'];
        header("Location:" . $fullform);
    }
//var_dump($fullform);

//var_dump($result);
?>