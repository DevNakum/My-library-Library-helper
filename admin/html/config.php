<?php
<<<<<<< HEAD
    $hostname = "http://localhost/PHP/Project/Clg-Project/MyLibrary-LibraryHelper";
    // $hostname = "http://localhost/Library-Helper";
=======
    
    // $hostname = "http://localhost/PHP/Project/Clg-Project/MyLibrary-LibraryHelper";
    $hostname = "http://localhost/Library-Helper";
    if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
      {
          header("Location: {$hostname}/user/html/");
      }
>>>>>>> 532b22efeccb45b02c13412c0e815abd0ca7e815
    $conn = mysqli_connect("localhost","root","","library") or die("Connection failed : ".mysqli_connect_error());
?>