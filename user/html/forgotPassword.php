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
            $check_email_is_exits = "select user_mail from tbl_users";
            $result_of_check = mysqli_query($conn,$check_email_is_exits) or die("check_email_is_exits is failed");
            
            $email = $_POST['txtEmail'];

            $flag=FALSE;
            if(mysqli_num_rows($result_of_check)>0){
              while($row = mysqli_fetch_assoc($result_of_check))
              {
                if($email == $row['user_mail'])
                  $flag = TRUE;
              }
            }
 
            if($flag)
            {
              $otp = (rand(100000,999999));
              $to = $email;
              $subject = "Forgot password";
              $message = "OTP for change password is ".$otp;
              // $from = "ndev2003@gmail.com";
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
                echo "wrong email";
              }

            }
            else
              echo "No email id found";
          }
        ?> 

</body>
</html>