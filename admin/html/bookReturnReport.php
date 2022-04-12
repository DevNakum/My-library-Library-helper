<?php 
// include "header.php";
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION["user_role"] == '0') {
  header("Location: {$hostname}/user/html/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <!-- <link rel="stylesheet" href="../css/add_book.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="image">
    <header><img src="2n1.png" alt="logo"></header>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><?php echo $_SESSION["user_id"];?></label>
        <ul>
            <li><a href="Admin_Profile.php">Home</a></li>
            <li><a class="active" href="">Return Report</a></li>
            <li><a href="seeReport.php">See Report</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="#">Log out</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
</body>

<head>
  <link rel="stylesheet" href="../css/bookReturnReport.css">
</head>
<form method="post" action="book_return_report.php">

<?php
  include 'config.php';
  $date = $_GET['date'];

  $sql1 = "select trb.admin_id,trb.book_id,tb.grp_id,tb.book_name,tb.book_edition,tb.book_author,trb.user_id,trb.return_date from tbl_book_copies tbc join tbl_books tb on tb.grp_id = tbc.grp_id join tbl_return_book trb where tbc.book_id = trb.book_id and trb.return_date = '{$date}'";


  // if the search button is pressed...
  if(isset($_GET['txtSearch'])) {
    // just for debugging...
    // print_r($_POST);

    // it must contain some value in search bar ....
    if(isset($_GET['txtSearch']) && $_GET['txtSearch'] != '') {
      // if it does, then query to fetch like data...
      $search = $_GET['txtSearch'];
      $sql1 .= "and LOWER(tb.book_name) LIKE '{$search}%'";
    }
  }
  // echo $sql;
  // die();

  // hidden fields....
  echo '<input type="hidden" name="query_last" value="'.$sql1.'">';
  echo '<input type="hidden" name="date" value="'.$date.'">';

  $result = mysqli_query($conn,$sql1) or die("query1 failed");
  if(mysqli_num_rows($result)){
?>
<div class="search">
  <input type="text" placeholder=" Enter Name.." name="txtSearch" class="txtSearch" autocomplete="off">
  <button type="submit" class="btnSearch" name="btnSearch">Search</button>
  <button class="btnDownload" name="btnDownload">Download</button>
</div>
<div class="tblReturnReport" style="overflow-x:auto;">
  <table>
    <tr>
      <th>Returned By</th>
      <th>Book Name</th>
      <th>Edition</th>
      <th>Author</th>
      <th>Taken By</th>
      <th>Return Date</th>
    </tr>
    <?php
      while($row = mysqli_fetch_assoc($result))  {
    ?>
    <tr>
      <td><?php echo $row['user_id'];?></td>
      <td><?php echo $row['book_name'];?></td>
      <td><?php echo $row['book_edition'];?></td>
      <td><?php echo $row['book_author'];?></td>
      <td><?php echo $row['admin_id'];?></td>
      <td><?php echo $row['return_date'];?></td>
    </tr>
    <!-- tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
  </table>
</div>
<?php
    }
  }
  else{
    echo "<h1 style='text-align: center; color: red;'>No book found</h1>";
  }
?>
</form>
<!-- </body>

</html> -->