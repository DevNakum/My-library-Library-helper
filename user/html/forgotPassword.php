<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../css/forgotPassword.css">
</head>
<body class="image">
  <header>Library Helper-My Library</header>
      <div class="maindiv">
        <h3>Forgot Password</h3>
        <div class="inputs">
          <div class="Fields">
            <div class="Fieldset">
              <input type="text" name="txtEmail" class="Before-FS" required="" autocomplete="off">
              <h1 class="Fs-H"><span>Email</span></h1>
              <label class="placeholder">Email</label>
            </div>
          </div>
          <button class="btnGenOTP" name="btnGenOtp">Generate OTP</button>
          
          <div class="Fields">
            <div class="Fieldset">
              <input type="text" name="txtOtp" class="Before-FS" required="" >
              <h1 class="Fs-H"><span>OTP</span></h1>
              <label class="placeholder">OTP</label>
            </div>
          </div>

        </div>
          <button class="btnSubmit">Submit</button>
      </div>

</body>
</html>