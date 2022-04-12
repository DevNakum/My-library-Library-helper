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
            <li><a class="active" href="">Take Return</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
</body>

<head>
    <link rel="stylesheet" href="../css/takeReturn.css">
</head>
<div class="search">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" placeholder=" Enter ID.." name="txtSearch" class="txtSearch" autocomplete="off">
        <button type="submit" name="submit" class="btnSearch">Search</button>
    </form>
</div>


<?php

if ($_GET['check']=='1' || isset($_POST['submit'])) {
    include 'config.php';

    if(isset($_POST['submit'])){
        $uid = $_POST['txtSearch'];
    }
    if($_GET['check']=='1')
    {
        $uid = ($_GET['uid']);
    }
            
    
    $sql = "select tib.book_id,tb.grp_id,tb.book_name,tb.book_edition,tb.book_author,tib.expected_return_date,tib.user_id,tib.issued_date from tbl_book_copies tbc join tbl_books tb on tb.grp_id = tbc.grp_id join tbl_issued_books tib where tbc.book_id = tib.book_id and tib.user_id = '{$uid}'";

    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

    if (mysqli_num_rows($result) > 0) {

?>
        <div class="tblReturnReport" style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Book Name</th>
                    <!-- <th>Book Id</th> -->
                    <th></th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['book_name'] ?></td>
                        <!-- <td><?php echo $row['book_id'] ?></td> -->

                        <td>
                        <form action="deleteBookFromUser.php" method="get">
                            <label class="switch">
                            
                            <input type="hidden"  name="id" value="<?php echo $row['book_id']; ?>"/>
                            <?php $checked='0'?>
                                <!-- <input type="checkbox" <?php echo $checked== '1' ? ' checked' : ''; ?>  name="chkReturn">
                                <span class="slider round"></span> -->
                                <!-- <div class="submit"> -->
                                    <button class="btnSubmit" name="btnSubmit">Return</button>   <!--class="btnSubmit"-->
                                <!-- </div> -->
                            </label>
                        </form>
                        </td>

                    </tr>
                <?php } //end of while loop ?>
                <!-- useless fellow -->
                <!-- <tr>
                    <td></td>
                    <td></td>
                </tr> -->
            </table>
        </div>

        
        <!-- <div class="submit">
            <button class="btnSubmit" name="btnSubmit">Submit</button>
        </div>
         -->
<?php

    }    //end of if   
}       //end of if (isset)
else
    echo "<h1 style='text-align: center; color: red;'>No book...</h1>"
?>




