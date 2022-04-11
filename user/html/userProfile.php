<?php
  session_start();
  if($_SESSION["user_role"]=='1')
  {
    header("Location: {$hostname}/user/html/");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>userProfile</title>
  <link rel="stylesheet" href="../css/userProfile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="image">
  <header><img src="2n1.png" alt="logo"></header>
  <nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <?php
      include 'config.php';

      $uid = $_SESSION["user_id"];
      
      $sql = "select * from tbl_users where user_id = '{$uid}'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);

    ?>
    <label class="logo"><?php echo $row['user_id'];?></label>
    <ul>
      <li><a class="active" herf="#">Home</a></li>
      <li><a herf="#">Credit</a></li>
      <li><a herf="../../about_us.php" onclick="window.location='../../about_us.php'">About us</a></li>
      <li><a herf="#">Contact us</a></li>
    </ul>
  </nav> 

  <!-- <?php include 'header.php';?> -->
  <div class="btn">
    <div>
      <button class="btnBookIssue" onclick="window.location.href = 'scanQr.php'">Book Issue</button>
    </div>
    <div>
      <button class="btnViewStatus" onclick="window.location.href = 'viewStatus.php'">View Status</button>
    </div>
    <div>
      <button class="btnBookRecommandation" onclick="window.location.href = 'bookRecommandation.php'">Book Recommandation</button>
    </div>
  </div>
<!-- </body>

</html> -->