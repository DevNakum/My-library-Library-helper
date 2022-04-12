<?php
  include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../css/forgotPassword.css">
</head>

<?php 
  
  $to_mail = "henilmistry74496@gmail.com";
  $subject = "Test";
  $body = "<h1>Hello! Henu</h1>";
  $headers = "From: henilmistry688@gmail.com";

  if(mail($to_mail, $subject, $body, $headers)) {
    echo "Mail sent";
  } else {
    echo "You Stupidddd!";
  }

 ?>
<body class="image">
  <header><img src="2n1.png" alt="logo"></header>
      <div class="maindiv">
        <h3>Forgot Password</h3>
        <div class="inputs">
          <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="Fields">
              <div class="Fieldset">
                <input type="text" name="txtEmail" class="Before-FS" required="" value="" autocomplete="off">
                <h1 class="Fs-H"><span>Email</span></h1>
                <label class="placeholder">Email</label>
              </div>
            </div>
            <button class="btnGenOTP" name="btnGenOtp">Generate OTP</button>
          </form>

        <?php
          if (isset($_POST['btnGenOtp']))
          {
            // query for check if email is exists in databse or not
            $check_email_is_exits = "select user_mail from tbl_users";
            $result_of_check = mysqli_query($conn,$check_email_is_exits) or die("check_email_is_exits is failed");
            
            // take email from input
            $email = $_POST['txtEmail'];

            $flag=FALSE;
            if(mysqli_num_rows($result_of_check)>0){
              while($row = mysqli_fetch_assoc($result_of_check))
              {
                if($email == $row['user_mail'])
                  $flag = TRUE;   //if email is exists in database its fine
              }
            }
 
            if($flag)
            {
              $otp = (rand(100000,999999));     // generate 6 digits otp
              $to = $email;
              $subject = "Forgot password";
              $message = "OTP for change password is ".$otp;
              $headers = "From: ndev2003@gmail.com";

              if(mail($to, $subject, $message, $headers)){
                echo "Mail has successfully sent to ".$email;

                echo '
                <form action="updatePassword.php" method="post">
                  <div class="Fields">
                    <div class="Fieldset">
                      <input type="text" name="txtOtp" class="Before-FS" required="" >
                      <input type="hidden" name="txtOtpConfirm" value="'.$otp.'">
                      <input type="hidden" name="user_mail" value="'.$email.'">
                      <h1 class="Fs-H"><span>OTP</span></h1>
                      <label class="placeholder">OTP</label>
                    </div>
                  </div>

                  </div>
                    <button class="btnSubmit" name="btnSubmit">Submit</button>
                  </div>
                </form>';
              }
              else
              {
                echo "<h4 style='text-align: center; color: red;'>wrong email</h4>";
              }

            }
            else
              echo "<h4 style='text-align: center; color: red;'>No email id found</h4>";
          }
        ?> 

</body>
</html>