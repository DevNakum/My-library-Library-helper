<?php
  // include "header.php";
  session_start(); 
  include_once "config.php";
  if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
  {
      header("Location: {$hostname}/admin/html/");
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
            <li><a class="active" href="">Combine Report</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="#">Log out</a></li>
        </ul>
    </nav>
</body>
  <head>
    <link rel="stylesheet" href="../css/combinedReport.css">
  </head>
  
  <!-- form starts from here -->
  <form method="post" action="download_combined_report.php">
    <?php 

      // initial query to fetch all the details from tbl_books table....
      $query_fetch_books = "SELECT * FROM tbl_books";

      // if the search button is pressed...
      if(isset($_GET['txtSearch'])) {
        // just for debugging...
        // print_r($_POST);

        // it must contain some value in search bar ....
        if(isset($_GET['txtSearch']) && $_GET['txtSearch'] != '') {
          // if it does, then query to fetch like data...
          $search = $_GET['txtSearch'];
          $query_fetch_books = "SELECT * FROM tbl_books WHERE LOWER(book_name) LIKE '{$search}%'";
        }
      }
    ?>

    <div class="search">
            <input type="text" placeholder=" Enter Name.." name="txtSearch" class="txtSearch" autocomplete="off">   
            <button type="submit" class="btnSearch" name="btnSearch">Search</button>    
            <button class="btnDownload" name="btnDownload">Download</button>      
    </div>
    
    

  <div class="tblReturnReport" style="overflow-x:auto;">
    <table>
      <tr>
        <th>Book Name</th>
        <th>Edition</th>
        <th>Author</th>
        <th>Total copies</th>
        <th>Issued copies</th>
      </tr>
      <!-- sample data -->
      <!-- <tr>
        <td>BALAGURU SWAMI</td>
        <td>2nd</td>
        <td>BALAGURU</td>
        <td>10</td>
        <td>8</td>
      </tr> -->
      <?php 

        echo '<input type="hidden" name="query_last" value="'.$query_fetch_books.'">';

        // query to fetch all books, for combined report...
        $fetch_result = mysqli_query($conn,$query_fetch_books) or die("Book fetching failed!");

        if(mysqli_num_rows($fetch_result) > 0) { // if there exist more than 0 rows...
          while ($row = mysqli_fetch_assoc($fetch_result)) { // fetch first row...
            
            // query to fetch total issued copies...
            $grp_id = $row['grp_id']; // group id ...

            // count the total book id's with given grp_id which are having book status as NO....
            $query_fetch_issed_copies = 'SELECT count(grp_id)"total_issued" FROM tbl_book_copies WHERE grp_id='. $grp_id .' AND book_status="YES"';
            $fetch_result_one = mysqli_query($conn,$query_fetch_issed_copies) or die("Total issued copies fetching Unsuccessfull!");
            $total_copies = mysqli_fetch_assoc($fetch_result_one)['total_issued'];

            echo "<tr>
                  <input type='hidden' name='grp_id[]' value='". $grp_id ."'>
                  <td>". $row['book_name'] ."</td>
                  <td>". $row['book_edition'] ."</td>
                  <td>". $row['book_author'] ."</td>
                  <td>". $row['book_quantity'] ."</td>
                  <td>". $total_copies ."</td>
                  </tr>";

          }
        }


       ?>

    </table>
  </div>

</form>
<button class="btnBack" name="btnDownloadBack" onclick="window.location='Admin_Profile.php'">Back</button>
<!-- form ends over here -->
<!-- </body>

</html> -->