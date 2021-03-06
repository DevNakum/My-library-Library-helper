<?php
  session_start();
  include "config.php";
  if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='1')
  {
    header("Location: {$hostname}/user/html/");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Issue</title>
  <link rel="stylesheet" href="../css/bookIssue.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="image">
  <header><img src="2n1.png" alt="logo"></header>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    
    <label class="logo"><?php echo $_SESSION["user_id"];?> </label>
    <ul>
      <li><a herf="userProfile.php" onclick="window.location='userProfile.php'">Home</a></li>
      <li><a class="active" herf="#">Book Issue</a></li>
      <li><a herf="#">About us</a></li>
      <li><a herf="#">Contact us</a></li>
    </ul>
  </nav>
  
  <?php
  include 'config.php';

  
  $bid = $_GET['bid'];
  if(isset($_GET['err'])) {
    if($_GET['err']>=1) {
      echo "<div style='justify-content: center;'><h2 style='color: red; text-align:center; justify-content:center;'>Sorry! This book is already issued by you or someone else.</h2></div>";
      die();
    } 
   } //else {
  //   echo "<h1 style='color: red; text-align:center;'>Invalid access! Wrong URL!</h1>";
  //   die();
  // }
  // die();
  
  $sql1 = "select tib.book_id,tb.grp_id,tb.book_name,tb.book_edition,tb.book_author,tib.expected_return_date,tib.user_id,tib.issued_date from tbl_book_copies tbc join tbl_books tb on tb.grp_id = tbc.grp_id join tbl_issued_books tib where tbc.book_id = tib.book_id and tib.book_id = $bid";
  // echo $sql1;
  // die();

  $result = mysqli_query($conn, $sql1) or die("Query1 unsuccessful");
  // die();
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <section class="top">
        <span class="id" name="id">Issued by : <?php echo $row['user_id'];?></span>
        <span class="date" nam="date">Date : <?php echo $row['issued_date'];?></span>
      </section>

      <div class="container">

        <div class="tblRow">
          <div class="col-25">


            <label for="bookName">Book Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="txtBookName" name="txtBookName" value="<?php echo $row['book_name'] ?>" disabled>
          </div>
        </div>
        <div class="tblRow">
          <div class="col-25">
            <label for="bookAuthor">Book Author</label>
          </div>
          <div class="col-75">
            <input type="text" id="txtBookAuthor" name="txtBookAuthor" value="<?php echo $row['book_author'] ?>" disabled>
          </div>
        </div>
        <div class="tblRow">
          <div class="col-25">
            <label for="bookEdition">Book Edition</label>
          </div>
          <div class="col-75">
            <input type="text" id="txtBookEdition" name="txtBookEdition" value="<?php echo $row['book_edition'] ?>" disabled>
          </div>
        </div>
        <div class="tblRow">
          <div class="col-25">
            <label for="dueDate">Due Date</label>
          </div>
          <div class="col-75">
            <input type="text" id="txtDueDate" name="txtDueDate" value="<?php echo $row['expected_return_date'] ?>" disabled>
          </div>
        </div>

      </div>
  <?php
    } //endof while loop
  }   //end of if
  ?>
<button class="btnBack" name="btnDownloadBack" onclick="window.location='userProfile.php'">Ok</button>
</html>