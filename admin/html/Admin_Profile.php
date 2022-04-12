<?php include "header.php"; 
  if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
  {
      header("Location: {$hostname}/user/html/");
  }
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin_Profile</title>
  <link rel="stylesheet" href="../css/Admin_Profile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<body>
  <header>
    Library Helper - My Library
  </header>
  <nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">ID No.</label>
    <ul>
      <li><a href="#">Home</a></li>
            <li><a href="combinedReport.php">Combine Report</a></li>
            <li><a class="active" href="#">Credit</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="#">Contact us</a></li>
    </ul>
  </nav> -->

  <head>
    <link rel="stylesheet" href="../css/Admin_Profile.css" />
  </head>
  <div class="Container">

    <div class="Button">

      <div>
        <button onclick="location.href='add_book.php'" class="btnAddBook">Add Book</button>
      </div>
      <div>
        <button onclick="location.href='takeReturn.php?check=2'" class="btnTakeReturn">Take Return</button>
      </div>
      <div>
        <button onclick="location.href='setRecommandation.php'" class="btnSetRecommandation">Set Recommandation</button>
      </div>
      <div>
        <button onclick="location.href='seeReport.php'" class="btnSeeReport">See Report</button>
      </div>

    </div>

  </div>
<!-- </body>

</html> -->