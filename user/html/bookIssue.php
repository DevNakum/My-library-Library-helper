<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Issue</title>
    <link rel="stylesheet" href="../css/bookIssue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
          <li><a herf="#">Home</a></li>
          <li><a class="active"herf="#">Credit</a></li>
          <li><a herf="#">About us</a></li>
          <li><a herf="#">Contact us</a></li>
      </ul>
  </nav>  
  <section class="top">
    <span class="id" name="id">Issued by : </span>
    <span class="date" nam="date">Date : </span>
  </section>
  <div class="container">
    <div class="tblRow">
      <div class="col-25">
        <label for="bookName">Book Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtBookName" name="txtBookName" disabled>
      </div>
    </div>
    <div class="tblRow">
      <div class="col-25">
        <label for="bookAuthor">Book Author</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtBookAuthor" name="txtBookAuthor" disabled>
      </div>
    </div>
    <div class="tblRow">
      <div class="col-25">
        <label for="bookEdition">Book Edition</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtBookEdition" name="txtBookEdition" disabled>
      </div>
    </div>
    <div class="tblRow">
      <div class="col-25">
        <label for="dueDate">Due Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="txtDueDate" name="txtDueDate" disabled>
      </div>
    </div>
</div>
</html>