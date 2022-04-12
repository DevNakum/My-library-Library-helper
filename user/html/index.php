<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/index.css">
  <title>Home Page</title>
</head>

<body class="image">

  <header>My Library - Library Helper</header>
  <div class="btnAllBtn">
    <div>
      <button class="btnLogin" name="btnLogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </div>
    <div>
      <button class="btnSignUp" name="btnSignUp" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Sign
        Up</button>
    </div>
  </div>


  <div id="id01" class="modal">

    <form class="modal-content animate" action="Login.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="..\User-Profile-PNG-High-Quality-Image.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">

        <!-- <form action="login.php" method="post"> -->
          <div class="inputs">
            <div class="Fields">
              <div class="Fieldset">
                <input type="text" name="txtUsername" class="Before-FS" required="" autocomplete="off">
                <h1 class="Fs-H"><span>Username</span></h1>
                <label class="placeholder">Username</label>
              </div>
            </div>
            <div class="Fields">
              <div class="Fieldset">
                <input type="password" name="txtPassword" class="Before-FS" required="">
                <h1 class="Fs-H"><span>Password</span></h1>
                <label class="placeholder">Password</label>
              </div>
            </div>
            <button type="submit" name="btnLogin">Login</button>  <!--onclick="window.location.href = 'userProfile.php'"-->
          </div>
        <!-- </form> -->
        
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="forgotPassword.php">password?</a></span>
      </div>
    </form>
  </div>

  <!-- <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="..\User-Profile-PNG-High-Quality-Image.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <div class="inputs">
          <div class="Fields">
            <div class="Fieldset">
              <input type="text" name="txtUsername" class="Before-FS" required="" autocomplete="off">
              <h1 class="Fs-H"><span>Username</span></h1>
              <label class="placeholder">Username</label>
            </div>
          </div>
          <div class="Fields">
            <div class="Fieldset">
              <input type="password" name="txtPassword" class="Before-FS" required="">
              <h1 class="Fs-H"><span>Password</span></h1>
              <label class="placeholder">Password</label>
            </div>
          </div>

        </div>
        <button type="submit" onclick="window.location.href = '../../admin/HTML/Admin_Profile.php'" name="btnAdminLogin">Login</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" name="btnCancel">Cancel</button>
      </div>
    </form>
  </div> -->


  <div id="id03" class="modal">

    <form class="modal-content animate" action="signUp.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="..\User-Profile-PNG-High-Quality-Image.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <div class="inputs">
          <div class="Fields">
            <div class="Fieldset">
              <input type="text" name="txtEmail" class="Before-FS" id="txtSignUpEmail" required="" autocomplete="off">
              <h1 class="Fs-H"><span>Email</span></h1>
              <label class="placeholder">Email</label>
            </div>
          </div>
          <div class="Fields">
            <div class="Fieldset">
              <input type="text" name="txtUsername" class="Before-FS" required="" autocomplete="off">
              <h1 class="Fs-H"><span>Id</span></h1>
              <label class="placeholder">Id</label>
            </div>
          </div>
          <div class="Fields">
            <div class="Fieldset">
              <input type="password" name="txtPassword" class="Before-FS" required="">
              <h1 class="Fs-H"><span>Password</span></h1>
              <label class="placeholder">Password</label>
            </div>
          </div>
          <div class="Fields">
            <div class="Fieldset">
              <input type="password" name="txtConfirmPassword" class="Before-FS" required="">
              <h1 class="Fs-H"><span>Confirm Password</span></h1>
              <label class="placeholder">Confirm Password</label>
            </div>
          </div>

        </div>
        <button type="submit" onclick="submit();" name="btnSignup">Sign Up</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    var modal = document.getElementById('id03');
    var x = document.getElementById('txtSignUp').required;
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    function submit() {
      window.location.href = "userProfile.php"
    }
  </script>

</body>

</html>