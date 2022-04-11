<?php include "header.php";
  // session_start();
  if($_SESSION["user_role"]=='0')
  {
      header("Location: {$hostname}/user/html/");
  }
?>
<!-- <!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  <link rel="stylesheet" href="../css/issueBookReport.css">
</head>

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
      <li><a href="Admin_Profile.php">Home</a></li>
            <li><a href="combinedReport.php">Combine Report</a></li>
            <li><a class="active" href="#">Credit</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="#">Contact us</a></li>
    </ul>
  </nav> -->

<head>
  <link rel="stylesheet" href="../css/issueBookReport.css">
</head>

<form method="post" action="book_report.php">



<?php
  include 'config.php';
  $date = $_GET['date'];
 
  // query to fetch book issued report...
  $sql1 = "select tib.book_id,tb.grp_id,tb.book_name,tb.book_edition,tb.book_author,tib.user_id,tib.issued_date from tbl_book_copies tbc join tbl_books tb on tb.grp_id = tbc.grp_id join tbl_issued_books tib where tbc.book_id = tib.book_id and tib.issued_date = '{$date}'";

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
  if(mysqli_num_rows($result) > 0){
?>
<div class="search">
  <input type="text" placeholder=" Enter Name.." name="txtSearch" class="txtSearch" autocomplete="off">
  <button type="submit" class="btnSearch" name="btnSearch">Search</button>
  <button class="btnDownload" name="btnDownload">Download</button>
</div>
<div class="tblReturnReport" style="overflow-x:auto;">
  <table>
    <tr>
      <th>Issue Date</th>
      <th>Issueded By</th>
      <th>Book Name</th>
      <th>Edition</th>
      <th>Author</th>
    </tr>
    <?php
      while($row = mysqli_fetch_assoc($result))  {
    ?>
    <tr>
      <td name="issueDate"><?php echo $row['issued_date'];?></td>
      <td name="issuedBy"><?php echo $row['user_id'];?></td>
      <td name="bookName"> <?php echo $row['book_name'];?></td>
      <td name="bookEdition"><?php echo $row['book_edition'];?></td>
      <td name="bookAuthor"><?php echo $row['book_author'];?></td>
    </tr>
  <?php }?>
  </table>
</div>
<?php
    
  }
  else{
    echo "<h1 style='text-align: center; color: red;'>No book found</h1>";
  }
?>
</form>
<!-- </body>

</html> -->