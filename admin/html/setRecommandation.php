<?php include "header.php"; ?>
<!-- <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/setRecommandation.css">
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
        <link rel="stylesheet" href="../css/setRecommandation.css">
    </head>
<form method="post">
    <div class="search">
        <!-- first select option starts from here -->
        <select name="dept" id="optDept" style="border-style: solid;">

            <option class="optDept" value="select" name="select">---Select---</option>
            
            <!-- initially, fetching the departments -->
            <?php 
                // including configuration file, estlabishing connection with database...
                include 'config.php';
                // query to dynamically bring distinct departments...
                $query_dept_fetch = "SELECT distinct dept_name FROM tbl_dept_subjects";

                // fetching query and using result...
                $fetch_result = mysqli_query($conn,$query_dept_fetch) or die("Department Fecth Query Unsuccessful!");
                if(mysqli_num_rows($fetch_result) > 0) {
                    while($row = mysqli_fetch_assoc($fetch_result)) {
                        $name = $row['dept_name'];
                        $selected = '';
                        if(isset($_POST['btnGo'])) {
                            if($name==$_POST['dept']) {
                                $selected = 'selected';
                            }
                        }
                        echo '<option class="optDept" value="'.$name.'" name="'.$name.'" '.$selected.'>'.$name.'</option>';
                    }
                }

            ?>
            <!-- fetching departments over here -->

        </select>
        <!-- first select option ends here -->

        <!-- second selet starts from here -->
        <select name="sem" id="optSem" style="border-style: solid;">
            <option class="optSem" value="select" name="select">---Select---</option>
            
            <?php 
                // if btnGo is pressed once...
                if(isset($_POST['btnGo'])) {
                    // get the department name from post object...
                    $dept_name = $_POST['dept'];
                    // query to dynamically insert the semester for selected department name...
                        $query_fetch_sem = "SELECT semester FROM tbl_dept_subjects WHERE dept_name='{$dept_name}' GROUP BY semester ORDER BY semester";
                    // fetching query result and using that...
                        $fetch_result = mysqli_query($conn,$query_fetch_sem) or die("Semester fetch query Unsuccessful!");

                    // if btnGo is pressed twice then it must contain 'sem' key ...
                    if(isset($_POST['sem'])) {
                        if(mysqli_num_rows($fetch_result) > 0) {
                            while ($row = mysqli_fetch_assoc($fetch_result)) {
                                $sem_no = $row['semester'];
                                $selected = '';
                                if($sem_no==$_POST['sem']) {
                                    $selected = 'selected';
                                }
                                echo '<option class="optSem" value="'.$sem_no.'" name="sem'.$sem_no.'" '.$selected.'>sem '.$sem_no.'</option>';
                            }
                        }

                    } 
                    // else just fetch and store...
                    else {
                        if(mysqli_num_rows($fetch_result) > 0) {
                            while ($row = mysqli_fetch_assoc($fetch_result)) {
                                $sem_no = $row['semester'];
                                echo '<option class="optSem" value="'.$sem_no.'" name="sem'.$sem_no.'">sem '.$sem_no.'</option>';
                            }
                        }
                    }
                }
            ?>
        </select>
        <!-- second select ends here -->
        
        <button class="btnDownload" name="btnGo">Go</button>
    </div>
    <!-- ==================================================================================================== -->
    <!-- subject table will be generated over here -->
    <div class="tblReturnReport" style="overflow-x:auto;">
        <table name="table">
            <?php 
                // if the semester and department keys are there...
                if(isset($_POST['sem']) && isset($_POST['dept'])) { // set the table...

                    // if sem key is not 'select'...
                    if($_POST['sem']!='select') { // then make table header...
                        echo "<tr><th>Recommed?</th><th>Subject Code</th><th>Subject Name</th></tr>";    
                    } else { // otherwise print message...
                        echo "<h2 style='text-align: center;'>Now, Please Select Semester and press Go to proceed!</h2>";
                    }
                    
                    // get the name of the department
                    $dept_name = $_POST['dept'];
                    // get the semester no...
                    $sem_no = $_POST['sem'];

                    // query for getting the subjects in particular department and specifically in semester..
                    $query_fetch_subject = "SELECT sub_code,sub_name FROM tbl_dept_subjects WHERE dept_name = '{$dept_name}' AND semester = '{$sem_no}'";
                    // result of above query...
                    $fetch_result = mysqli_query($conn,$query_fetch_subject) or die("Subject fetch query Unsuccessful!");

                    if(mysqli_num_rows($fetch_result) > 0) {
                        while($row = mysqli_fetch_assoc($fetch_result)) {
                            echo "<tr>";
                            echo "<td>";
                            // may be not necessary...
                            /*echo '<label class="switch">';
                            echo '<input type="checkbox" name="chkSubject">';
                            echo '<span class="slider round"></span>';
                            echo "</label>";*/
                            echo '<a href="editRecommandation.php?dept='.$dept_name.'&sem='.$sem_no.'&sub='.$row['sub_code'].'">Recommend</a>';
                            echo "</td>";
                            echo "<td>".$row['sub_code']."</td>";
                            echo "<td>".$row['sub_name']."</td>";
                            echo "</tr>";
                        }
                    }

                } else { // otherwise print message..
                    echo "<h2 style='text-align: center;'>Please Select Department and press Go!</h2>";
                }

            ?>

        </table>
        <!-- subject table ends over here -->
        <!-- ==================================================================================================== -->
    </div>
    <!-- may be not necessary -->
    <!-- <div class="submit">
        <button class="btnSubmit">Submit</button>
    </div> -->
</form>
<!-- 
</body>

</html> -->