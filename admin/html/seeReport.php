<?php 
    // include "header.php"; 
    session_start();
    if(!isset($_SESSION['user_role']) || $_SESSION["user_role"]=='0')
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
            <li><a class="active" href="">See Reports</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="#">Log out</a></li>
        </ul>
    </nav>
</body>

    <head>
        <link rel="stylesheet" href="../css/see report.css">
    </head>
    
    <div class="contain">

        <form action="takeDate.php" method="post">
            <div class="tooltip">
                <input type="date" id="datepicker" name="date">  
            </div>
        
        <div class="tooltip">
            <button class="btnBookIssueReport" name="btnBookIssueReport" onclick="location.href='issueBookReport.php'">Book Issued Report </button>
        </div>

        <div class="tooltip">
            <button class="btnBookReturnedReport" onclick="location.href='bookReturnReport.php'">Book Returned Report</button>
        </div>

        </form>
        <?php
            if(isset($_POST['date']))
            {
                $date = $_POST['date']; 
                echo $date;
            }
            

        ?>
        
    </div>


<!-- </body>

</html> -->