<!-- Header is included over here -->
<?php include "header.php";
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
    <form action="save_data_add_book.php" method="post">
        <div class="tblRow">
            <div class="col-25">
                <label for="bookName">Book Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookName" name="txtBookName"

                <?php

                    if(isset($_GET['id'])) {
                        $val = $_GET['b_name'];
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

                    if(isset($_GET['id'])) {
                        $val = $_GET['b_author'];
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

                    if(isset($_GET['id'])) {
                        $val = $_GET['b_edition'];
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

                    if(isset($_GET['id'])) {
                        $val = $_GET['b_quantity'];
                        echo "value='{$val}' disabled";
                    }

                    ?>

                >
            </div>

        </div>

        <div class="submit">
            <button class="btnSubmit" name="btnSubmit" type="submit">Submit</button>
            <button class="btnGenQr" 
            
            <?php 
                // enabling or disbling the button...
                if(!isset($_GET['id'])) {
                    echo 'class="ClsDisabled" disabled';
                } else {
                    if($_GET['id'] == 1) {
                        echo "enabled";
                    } else {
                        echo 'class="ClsDisabled" disabled';
                    }
                }

            ?> 

            name="btnGenerate" >Gen_QR</button>
        </div>
    </form>

    // ask for help...
    <!-- <div class="recommandation">
            <button class="btnSetRecommandation" 

            <?php 
                // enabling or disbling the button...
                if(!isset($_GET['id'])) {
                    echo 'class="ClsDisabled" disabled';
                } else {
                    if($_GET['id'] == 1) {
                        echo "enabled";
                    } else {
                        echo 'class="ClsDisabled" disabled';
                    }
                }

            ?> 

             onclick="window.location='<?php 

                if($_GET['id']==1) {
                    echo "$hostname/admin/html/setRecommandation.php?getSub=1&grp_id={$_GET['grp_id']}"; 
                }

            ?>'">
            Set Recommandation</button>
        </div> -->
    <!-- Form Ends Here -->
</div>

<!-- </html>