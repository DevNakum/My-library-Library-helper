<?php 
include_once("config.php");

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
                <th>Issue Date</th>
                <th>Issueded By</th>
                <th>Book Name</th>
                <th>Edition</th>
                <th>Author</th>
              </tr>
      ';

      while($row = mysqli_fetch_assoc($fetch_result))  {
        $output .= '
              <tr>
              <td name="issueDate">'.$row["issued_date"].'</td>
              <td name="issuedBy">'.$row["user_id"].'</td>
              <td name="bookName">'.$row["book_name"].'</td>
              <td name="bookEdition">'.$row["book_edition"].'</td>
              <td name="bookAuthor">'.$row["book_author"].'</td>
            </tr>
        ';
      }
      $output .= '</table>';
      // header information for browser...
      // type of contents....
      header("Content-Type: application/xls"); // xls content...
      header("Content-Disposition: attachment; filename=IssuedBook_".date('Ymd').".xls");
      echo $output;
      exit();
  }
} elseif (isset($_POST['txtSearch']) && $_POST['txtSearch']!=' ') {
  $data = $_POST['txtSearch'];
  header("Location: $hostname/admin/html/issueBookReport.php?txtSearch=$data&date={$_POST['date']}");
}


?>