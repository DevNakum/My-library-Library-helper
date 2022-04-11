<?php
    include 'config.php';
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