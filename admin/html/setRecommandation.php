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
    <div class="search">
        <select name="dept" id="optDept" style="border-style: solid;">

            <option class="optDept" value="select" name="select">---Select---</option>
            <option class="optDept" value="CSE" name="CSE">CSE</option>
            <option class="optDept" value="CE" name="CE">CE</option>
            <option class="optDept" value="IT" name="IT">IT</option>
            <option class="optDept" value="ME" name="ME">ME</option>
            <option class="optDept" value="Civil Eng." name="CivilEng">Civil Engineering</option>

        </select>
        <select name="sem" id="optSem" style="border-style: solid;">
            <option class="optSem" value="select" name="select">---Select---</option>
            <option class="optSem" value="sem1" name="sem1">sem1</option>
            <option class="optSem" value="sem2" name="sem2">sem2</option>
            <option class="optSem" value="sem3" name="sem3">sem3</option>
            <option class="optSem" value="sem4" name="sem4">sem4</option>
            <option class="optSem" value="sem5" name="sem5">sem5</option>
            <option class="optSem" value="sem6" name="sem6">sem6</option>
            <option class="optSem" value="sem7" name="sem7">sem7</option>
            <option class="optSem" value="sem8" name="sem8">sem8</option>
        </select>
        <button class="btnDownload" name="btnDownload">Go</button>
    </div>



    <div class="tblReturnReport" style="overflow-x:auto;">
        <table name="table">
            <tr>
                <th></th>
                <th>Book Name</th>
            </tr>
            <tr>
                <td>
                    <label class="switch">
                        <input type="checkbox" name="chkSubject">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>MCO</td>
            </tr>
            <tr>
                <td>
                    <label class="switch">
                        <input type="checkbox" name="chkSubject">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>OOPC</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="submit">
        <button class="btnSubmit">Submit</button>
    </div>
<!-- 
</body>

</html> -->