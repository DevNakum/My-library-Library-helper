<?php 

session_start();
include_once("config.php");
if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
{
    header("Location: {$hostname}/user/html/");
}

// for debugging...
// print_r($_POST);
$query_download = $_POST['query_last'];
$output = '';

// for debugging only
// echo $query_download;
if(isset($_POST['btnDownload'])) {
  $fetch_result = mysqli_query($conn,$query_download) or die("Download time query failed!");
  if(mysqli_num_rows($fetch_result) > 0) {
      $output .= '
              <table border="1">
              <tr>
                <th>Returned By</th>
                <th>Book Name</th>
                <th>Edition</th>
                <th>Author</th>
                <th>Taken By</th>
                <th>Return Date</th>
              </tr>
      ';

      while($row = mysqli_fetch_assoc($fetch_result))  {
        $output .= '
             <tr>
              <td>'.$row["user_id"].'</td>
              <td>'.$row["book_name"].'</td>
              <td>'.$row["book_edition"].'</td>
              <td>'.$row["book_author"].'</td>
              <td>'.$row["admin_id"].'</td>
              <td>'.$row["return_date"].'</td>
            </tr>
        ';
      }
      $output .= '</table>';
      // header information for browser...
      // type of contents....
      header("Content-Type: application/xls"); // xls content...
      header("Content-Disposition: attachment; filename=ReturnBook_".date('Ymd').".xls");
      echo $output;
      exit();
  }
} elseif (isset($_POST['txtSearch']) && $_POST['txtSearch']!=' ') {
  $data = $_POST['txtSearch'];
  header("Location: $hostname/admin/html/bookReturnReport.php?txtSearch=$data&date={$_POST['date']}");
}


?>