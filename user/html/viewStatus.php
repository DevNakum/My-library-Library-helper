<?php 
    include "config.php";
    session_start();
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
    <title>View Status</title>
    <link rel="stylesheet" href="../css/viewStatus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
          <li><a herf="#" onclick="window.location='userProfile.php'">Home</a></li>
          <li><a class="active"herf="#">View Status</a></li>
          <li><a herf="#" onclick="window.location='../../about_us.php'">About us</a></li>
          <li><a herf="#">Contact us</a></li>
      </ul>
  </nav>  
  <!-- extra css styling is added here -->
  


  <?php 

  // session_start();
  // // print_r($_SESSION); 


  ?>
  <!-- actual design is here -->
  <section class="top">
    <!-- <span class="name" name="name">Name : <?php echo $_SESSION['user_name']; ?></span> -->
    <!-- <span class="id" name="id">ID No. : <?php echo $_SESSION['user_id']; ?></span> -->
  </section>
  <div class="tblReturnReport" style="overflow-x:auto;">
    <table name="table">
        <tr>
          <th>Book Name</th>
          <th>Book Author</th>
          <th>Book Edition</th>
          <th>Issue Date</th>
          <th>Days Remaining</th>
          <th>Expected Return Date</th>
        </tr>
        <!-- sample data -->
        <!-- <tr>
          <td>Moris-mano</td>
          <td>Moris</td>
          <td>2nd</td>
          <td>12-02-2022</td>
          <td>12-02-2022</td>
          <td>12-02-2022</td>
      </tr> -->
      <?php 

        // query to fetch all issued books...
        $query_fetch_issued_book = "SELECT * FROM tbl_issued_books WHERE user_id='{$_SESSION['user_id']}'";
        // echo $query_fetch_issued_book;
        // die();
        $fetch_result = mysqli_query($conn,$query_fetch_issued_book) or die("Fetching issued book query failed!");


        if(mysqli_num_rows($fetch_result) > 0) {
          while ($row = mysqli_fetch_assoc($fetch_result)) {
            // just for debugging...
            // print_r($row);

            // query to fetch book details...
            $query_fetch_book_details = "SELECT tb.book_name,tb.book_edition,tb.book_author FROM tbl_books tb,tbl_book_copies tbc WHERE tbc.book_id={$row['book_id']} AND tb.grp_id=tbc.grp_id";
            $fetch_result_one = mysqli_query($conn,$query_fetch_book_details) or die("Book details fetching failed!");
            if(mysqli_num_rows($fetch_result_one) > 0) {
              $row1 = mysqli_fetch_assoc($fetch_result_one);
            }

            // just for debugging...
            // print_r($row1);

            $date_today = date_create(date("Y-m-d"));
            $return_date = date_create($row['expected_return_date']);
            $difference = date_diff($date_today,$return_date); # it is an array...
            // print_r($difference); // just for debugging...
            echo '<tr>
                  <td>'.$row1["book_name"].'</td>
                  <td>'.$row1["book_author"].'</td>
                  <td>'.$row1["book_edition"].'</td>
                  <td>'.$row["issued_date"].'</td>';

            // if the difference is negative...
            if($difference->invert == 1) {
              // limit is exceeded...
              echo '<td style="background: red;">Limit Exceed! Action may be taken!</td>';
            }
            // if 0 days remaining...give one chance..
            else if($difference->days == 0) {
              echo '<td style="background: Orange;">Have to return today! 0 days remaining.</td>';
            }
            // if 5 days remaining...give warning...
            else if($difference->days >= 1 && $difference->days <= 5) {
              echo '<td style="background: green;">Only '.$difference->days.' days remaining.</td>';
            } else { // else just show...
              echo '<td>'.$difference->days.' days</td>';
            }
                  
            echo '<td>'.$row["expected_return_date"].'</td>
              </tr>';
          }
        }

       ?>
    </table>
</div>
</body>
</html>