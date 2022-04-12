<?php 
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
                <th>Book name</th>
                <th>Book edition</th>
                <th>Book author</th>
                <th>Total copies</th>
                <th>Total issued copies</th>
              </tr>
      ';

      while ($row = mysqli_fetch_assoc($fetch_result)) {
        // query to fetch total issued copies...
        $grp_id = $row['grp_id']; // group id ...

        // count the total book id's with given grp_id which are having book status as NO....
        $query_fetch_issed_copies = 'SELECT count(grp_id)"total_issued" FROM tbl_book_copies WHERE grp_id='. $grp_id .' AND book_status="YES"';
        $fetch_result_one = mysqli_query($conn,$query_fetch_issed_copies) or die("Total issued copies fetching Unsuccessfull!");
        $total_copies = mysqli_fetch_assoc($fetch_result_one)['total_issued'];

        $output .= '
              <tr>
                <td>'. $row["book_name"] .'</td>
                <td>'. $row["book_edition"] .'</td>
                <td>'. $row["book_author"] .'</td>
                <td>'. $row["book_quantity"] .'</td>
                <td>'. $total_copies .'</td>
              </tr>
        ';
      }
      $output .= '</table>';
      // header information for browser...
      // type of contents....
      header("Content-Type: application/xls"); // xls content...
      header("Content-Disposition: attachment; filename=CombinedReport_".date('Ymd').".xls");
      echo $output;
      exit();
      header("Location: $hostname/admin/html/combinedReport.php");
  }
} elseif (isset($_POST['txtSearch']) && $_POST['txtSearch']!=' ') {
  $data = $_POST['txtSearch'];
  header("Location: $hostname/admin/html/combinedReport.php?txtSearch=$data");
}


?>