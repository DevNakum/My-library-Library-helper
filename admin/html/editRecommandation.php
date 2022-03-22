<!DOCTYPE html>
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
    </nav>



    <div class="tblReturnReport" style="overflow-x:auto;" name="table">
        <table>
            <tr>
                <th></th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Book Id</th>
            </tr>
            <tr>
                <td>
                    <label class="switch">
                        <input type="checkbox" checked name="chkrecommand">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>Programing in c</td>
                <td>BALAGURU SWAMI</td>
                <td>B1</td>
            </tr>
            <tr>
                <td>
                    <label class="switch">
                        <input type="checkbox" checked name="chkrecommand">
                        <span class="slider round"></span>
                    </label>
                </td>
                <td>Programing in c</td>
                <td>BALAGURU SWAMI</td>
                <td>B2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="submit">
        <button class="btnSubmit" name="btnSubmit">Submit</button>
    </div>
</body>

</html>