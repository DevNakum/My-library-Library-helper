<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>userProfile</title>
    <link rel="stylesheet" href="../css/userProfile.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <header>Library Helper - My Library</header>
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">ID No.</label>
      <ul>
        <li><a herf="#">Home</a></li>
        <li><a class="active" herf="#">Credit</a></li>
        <li><a herf="#">About us</a></li>
        <li><a herf="#">Contact us</a></li>
      </ul>
    </nav>
    <div class="btn">
      <div>
        <button class="btnBookIssue" onclick="window.location.href = 'bookIssue.php'">Book Issue</button>
      </div>
      <div>
        <button class="btnViewStatus" onclick="window.location.href = 'viewStatus.php'">View Status</button>
      </div>
      <div>
        <button class="btnBookRecommandation" onclick="window.location.href = 'bookRecommandation.php'">Book Recommandation</button>
      </div>
    </div>
  </body>
</html>
