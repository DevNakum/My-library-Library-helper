<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booj</title>
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
    </nav>
    <div class="container">
        <div class="tblRow">
            <div class="col-25">
                <label for="bookName">Book Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookName" name="txtBookName">
            </div>
        </div>
        <div class="tblRow">
            <div class="col-25">
                <label for="bookAuthor">Book Author</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookAuthor" name="txtBookAuthor">
            </div>
        </div>
        <div class="tblRow">
            <div class="col-25">
                <label for="bookEdition">Book Edition</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtBookEdition" name="txtBookEdition">
            </div>
        </div>
        <div class="tblRow">
            <div class="col-25">
                <label for="Quantity">Quantity</label>
            </div>
            <div class="col-75">
                <input type="text" id="txtQuantity" name="txtQuantity">
            </div>

        </div>

        <div class="submit">
            <button class="btnSubmit">Submit</button>
            <button class="btnGenQr">Gen_QR</button>
        </div>

        <div class="recommandation">
            <button class="btnSetRecommandation">Set Recommandation</button>
        </div>

    </div>

</html>