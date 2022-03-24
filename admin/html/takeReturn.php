<?php include "header.php"; ?>
<!-- <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/takeReturn.css">
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
        <link rel="stylesheet" href="../css/takeReturn.css">
    </head>
    <div class="search">
        <input type="text" placeholder=" Enter ID.." name="txtSearch" class="txtSearch" autocomplete="off">
        <button type="submit" class="btnSearch">Search</button>
    </div>



    <div class="tblReturnReport" style="overflow-x:auto;">
        <table>
            <tr>
                <th>Book Name</th>
                <th></th>
            </tr>
            <tr>
                <td>BALAGURU SWAMI</td>
                <td><label class="switch">
                        <input type="checkbox" checked name="chkReturn">
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td>BALAGURU SWAMI</td>
                <td>
                    <label class="switch">
                        <input type="checkbox" checked name="chkReturn">
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="submit">
        <button class="btnSubmit" name="btnSubmit">Submit</button>
    </div>

<!-- </body>

</html> -->