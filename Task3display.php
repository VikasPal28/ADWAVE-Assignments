<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =$_POST['Name'];
    $phone =$_POST['Phone'];
    $email =$_POST['Email'];
    $url =$_POST['URL'];
    $message =$_POST['Message'];

    echo "<h2>from Data Recieved</h2>";

    echo "Name:" . htmlspecialchars($name) ."<br>";
    echo "Name:" . htmlspecialchars($phone) ."<br>";
    echo "Name:" . htmlspecialchars($email) ."<br>";
    echo "Name:" . htmlspecialchars($url) ."<br>";
    echo "Name:" . htmlspecialchars($message) ."<br>";


}

?>
