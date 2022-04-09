<!-- Header is included over here -->
<?php include_once "header.php";
      include "config.php"
 ?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="../css/add_book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>Library Helper - My Library</header>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">ID No.</label>
        <ul>
            <li><a href="Admin_Profile.php">Home</a></li>
            <li><a href="combinedReport.php">Combine Report</a></li>
            <li><a class="active" href="#">Credit</a></li>
            <li><a href="../../about_us.php">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </nav> -->

<head>
    <link rel="stylesheet" href="../css/add_book.css">
</head>

<div class="container">
    <!-- The Form is included over here -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <?php  

            if(isset($_POST['btnRecommandation'])) {
                // print_r($_POST);
                $query_fetch_grp_id="SELECT grp_id FROM tbl_books WHERE book_name='{$_POST['book_name']}' AND book_edition={$_POST['book_edition']} AND book_author='{$_POST['book_author']}' AND book_quantity={$_POST['book_quantity']}";

                $fetch_result = mysqli_query($conn,$query_fetch_grp_id) or die("Group ID fetching faild!");
                if(mysqli_num_rows($fetch_result) > 0) {
                    $grp_id = mysqli_fetch_assoc($fetch_result)['grp_id'];
                }

                // echo "grp_id : $grp_id";
                header("Location: $hostname/admin/html/setRecommandation.php?id={$grp_id}");
            }
            else if(isset($_POST['btnGenerate']) || isset($_POST['btnSubmit_add'])) {
                include 'save_data_add_book.php';
                // print_r($_POST);
            }
            

        ?>
        <div class="tblRow">
            <div class="col-25">
                <label for="bookName">Book Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookName" name="txtBookName"

                <?php

                    if(isset($_POST['txtBookName'])) {
                        $val = $_POST['txtBookName'];
                        echo "value='{$val}' disabled";
                    }

                ?>

                >
            </div>
        </div>

        <div class="tblRow">
            <div class="col-25">
                <label for="bookAuthor">Book Author</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookAuthor" name="txtBookAuthor"

                <?php

                    if(isset($_POST['txtBookAuthor'])) {
                        $val = $_POST['txtBookAuthor'];
                        echo "value='{$val}' disabled";
                    }

                ?>

                >
            </div>
        </div>
        <div class="tblRow">
            <div class="col-25">
                <label for="bookEdition">Book Edition</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookEdition" name="txtBookEdition"

                <?php

                    if(isset($_POST['txtBookEdition'])) {
                        $val = $_POST['txtBookEdition'];
                        echo "value='{$val}' disabled";
                    }

                ?>

                >
            </div>
        </div>
        <div class="tblRow">
            <div class="col-25">
                <label for="Quantity">Quantity</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtQuantity" name="txtQuantity"

                    <?php

                    if(isset($_POST['txtQuantity'])) {
                        $val = $_POST['txtQuantity'];
                        echo "value='{$val}' disabled";
                    }

                    ?>

                >
            </div>

        </div>

        <div class="submit">
            <button class="btnSubmit" name="btnSubmit_add" type="submit" value="1">Submit</button>
            <button class="btnGenQr" 
            
            <?php 
                // enabling or disbling the button...
                if(!isset($_POST['btnSubmit_add'])) {
                    echo 'class="ClsDisabled" disabled';
                } else {
                    if($_POST['btnSubmit_add'] == 1) {
                        echo "enabled";
                    } else {
                        echo 'class="ClsDisabled" disabled';
                    }
                }

            ?> 

            name="btnGenerate" >Gen_QR</button>
        </div>

        <div class="recommandation">
            <button class="btnSetRecommandation" name="btnRecommandation"

            <?php 
                // enabling or disbling the button...
                if(!isset($_POST['btnSubmit_add'])) {
                    echo 'class="ClsDisabled" disabled';
                } else {
                    if($_POST['btnSubmit_add'] == 1) {
                        echo "enabled";
                    } else {
                        echo 'class="ClsDisabled" disabled';
                    }
                }

            ?> 
            >
            Set Recommandation</button>
        </div>

    </form>
    <!-- Form Ends Here -->
</div>

<!-- </html>