<?php
    include 'config.php';

    if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='1')
    {
        header("Location: {$hostname}/user/html/");
    }
    
    $bid = $_GET['bid'];
    // echo $bid;
    session_start();
    $uid = $_SESSION['user_id'];
    $date = date('Y-m-d');


    $check = "select book_status from tbl_book_copies where book_id = {$bid}";
    $result2 = mysqli_query($conn, $check) or die("Query unsuccessful");

    $ans = "YES";
    if(mysqli_num_rows($result2)>0){
        while($row = mysqli_fetch_assoc($result2))
        {
            $ans =  $row['book_status'];
        }
    }

    // echo $ans;
    // die();
    if($ans == "NO"){
        $date1_copy = date_create(date('Y-m-d'));
        date_add($date1_copy,date_interval_create_from_date_string('15 days'));
        $date2 = date_format($date1_copy,'Y-m-d');
        $sql1 = "insert into tbl_issued_books (book_id,user_id,issued_date,expected_return_date) values('{$bid}','{$uid}','{$date}','{$date2}')";

        // echo $sql1;
        // die();

        $result1 = mysqli_query($conn,$sql1) or die("Query1 unsuccessful.");
    
        $sql = "update tbl_book_copies set book_status = 'YES' where book_id = '{$bid}'";
        $result = mysqli_query($conn,$sql) or die("Query2 unsuccessful.");
    }
   
    else
    {
?>
        <h3>Sorry this book is already issued by someone</h3>
<?php
    }
    header("Location: {$hostname}/user/html/bookIssue.php?bid=$bid");
    // mysqli_close($conn);
?>  