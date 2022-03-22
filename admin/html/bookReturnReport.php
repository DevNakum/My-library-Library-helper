<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="../css/bookReturnReport.css">
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
  <div class="search">
    <input type="text" placeholder=" Enter ID.." name="txtSearch" class="txtSearch" autocomplete="off">
    <button type="submit" class="btnSearch"name="btnSearch">Search</button>
    <button class="btnDownload" name="btnDownload">Download</button>
  </div>



  <div class="tblReturnReport" style="overflow-x:auto;">
    <table>
      <tr>
        <th>Returned By</th>
        <th>Book Name</th>
        <th>Edition</th>
        <th>Author</th>
        <th>Taken By</th>
        <th>Return Date</th>
      </tr>
      <tr>
        <td>20CE056</td>
        <td>BALAGURU SWAMI</td>
        <td>2nd</td>
        <td>BALAGURU</td>
        <td>Admin</td>
        <td>13-03-2021</td>
      </tr>
      <tr>
        <td>20CE059</td>
        <td>BALAGURU SWAMI</td>
        <td>2nd</td>
        <td>BALAGURU</td>
        <td>Admin</td>
        <td>13-03-2022</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>

</body>

</html>