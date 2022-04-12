<?php
    include 'config.php';

    if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
    {
        header("Location: {$hostname}/user/html/");
    }

    $date = $_POST['date'];
    // echo $date;
    $issued_return = $_POST['btnBookIssueReport'];
    if(isset($issued_return)){
        header("Location: {$hostname}/admin/html/issueBookReport.php?date=$date");
    }
    else{
        header("Location: {$hostname}/admin/html/bookReturnReport.php?date=$date");
    }    
?>