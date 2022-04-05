<?php include "header.php"; ?>
<!-- <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/editRecommandation.css">
</head>

<body>
    <header>
        Library Helper - My Library
    </header>
    <nav>
        <input type="checkbox" id="check" />
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
        <link rel="stylesheet" href="../css/editRecommandation.css">
    </head>

    <form method="post" action="save_data_recommend_book.php">
    <div class="tblReturnReport" style="overflow-x:auto;" name="table">
        <?php
            include 'config.php';

            // getting information from URL bar...
            if(isset($_GET['dept']) && isset($_GET['sem'])  && isset($_GET['sub'])) {
                $dept_name = $_GET['dept'];
                $sem_no = $_GET['sem'];
                $sub_code = $_GET['sub'];
            } else {
                die("<h2 style='text-align: center; font-family: consolas; color: red;'>Unexpected Access!</h2>");
            }

            $query_fetch_sub_name = "SELECT sub_name FROM tbl_dept_subjects WHERE sub_code='{$sub_code}'";
            $fetch_result = mysqli_query($conn,$query_fetch_sub_name);
            if(mysqli_num_rows($fetch_result) > 0) {
                $sub_name = mysqli_fetch_assoc($fetch_result);
                echo "<h2 style='text-align: center; font-family: consolas;'>Now, you can set or edit the recommendation for subject : {$sub_name['sub_name']}</h2>";
                echo "<input type='text' name='dept' value='".$dept_name."' hidden>";
                echo "<input type='text' name='sem' value='".$sem_no."' hidden>";
                echo "<input type='text' name='sub_code' value='".$sub_code."' hidden>";
            } else {
                echo "<h2 style='text-align: center; font-family: consolas; color: red;'><b>Error exist in subject code or data lost!</b></h2>";
                die();
            }

        ?>
        <table>
            <tr>
                <th></th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Book Edition</th>
            </tr>
            <!-- Template for book record showing -->
            <!-- <tr>
                <td>
                    <label class="switch">
                        <input type="checkbox" checked name="chkrecommand">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>Programing in c</td>
                <td>BALAGURU SWAMI</td>
                <td>1</td>
            </tr> -->
            <?php

                // for debugging...
                //echo "<tr><td>Recommandation for department : ".$dept_name." semester : ".$sem_no." and subject code is : ".$sub_code."</td></tr>";

                // fetching the already existing recommendations, if any...
                // query to do so...
                $already_recommended_grp_id = array();
                $query_fetch_already_recommanded = "SELECT grp_id FROM tbl_recommendation WHERE sub_code='{$sub_code}'";
                $fetch_result = mysqli_query($conn,$query_fetch_already_recommanded) or die("Already existing recommendation fetching Unsuccessfull!");
                if(mysqli_num_rows($fetch_result) > 0) {
                    while($row = mysqli_fetch_assoc($fetch_result)) {
                        array_push($already_recommended_grp_id, $row['grp_id']);
                    }
                }


                //fetching all books and showing all options to recommend...
                // query to do so...
                $query_fetch_books = "SELECT grp_id,book_name,book_edition,book_author FROM tbl_books";
                $fetch_result = mysqli_query($conn,$query_fetch_books) or die("All books fetching Unsuccessfull!");

                if(mysqli_num_rows($fetch_result) > 0) {
                    while ($row = mysqli_fetch_assoc($fetch_result)) {
                        
                        if(sizeof($already_recommended_grp_id) > 0) { // if there exist alrady recommended books...

                            echo "<tr>";
                            echo '<td>
                                    <label class="switch">';

                            // checking whether the checkbox should be checked or not...
                            //  based on existance of grp_id in already_recommended_grp_id array...
                            if(in_array($row['grp_id'], $already_recommended_grp_id)) {
                                    echo '<input type="checkbox" checked name="books[]" value="'.$row['grp_id'].'">';
                            } else {
                                    echo '<input type="checkbox" name="books[]" value="'.$row['grp_id'].'">';
                            }

                            echo '<span class="slider round"></span>
                                </label>
                                </td>';
                            echo "<td>".$row['book_name']."</td>";
                            echo "<td>".$row['book_author']."</td>";
                            echo "<td>".$row['book_edition']."</td>";
                            echo "</tr>";



                        } else { // if there exist no any recommended books...

                            echo "<tr>";
                            echo '<td>
                                    <label class="switch">
                                        <input type="checkbox" name="books[]" value="'.$row['grp_id'].'">
                                        <span class="slider round"></span>
                                    </label>
                                    </td>';
                            echo "<td>".$row['book_name']."</td>";
                            echo "<td>".$row['book_author']."</td>";
                            echo "<td>".$row['book_edition']."</td>";
                            echo "</tr>";

                        }

                    }
                }
            ?>
        </table>
    </div>
    <div class="submit">
        <button class="btnSubmit" name="btnSubmit">Submit</button>
    </div>
    </form>
<!-- </body>

</html> -->