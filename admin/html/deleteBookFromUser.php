<h2>ok done</h2>

<?php
    $book_id = $_GET['id'];
    // echo "<pre>";
    // print_r($book_id);
    // echo "</pre>";


    include 'config.php';
    $sql2 = "select user_id from tbl_issued_books where book_id = $book_id";
    $result3 = mysqli_query($conn,$sql2) or dir("Query unsuccessful");

    $row = mysqli_fetch_assoc($result3);
    $uid = $row['user_id'];

    $sql = "update tbl_book_copies set book_status = 'NO' where book_id = $book_id";

    $result = mysqli_query($conn,$sql) or dir("Query unsuccessful");

    $sql1 = "delete from tbl_issued_books where book_id = $book_id";

    $result2 = mysqli_query($conn,$sql1) or dir("Query unsuccessful");
    

    // echo $uid;
    // $uid = md5($uid);
    header("Location: $hostname/admin/html/takeReturn.php?check=1&uid=$uid");

    mysqli_close($conn);
?>