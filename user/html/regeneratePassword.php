<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="../css/regeneratePassword.css">
</head>
<body class="image">
    <header>
      <img src="2n1.png" alt="logo">
    </header>
      <div class="maindiv">
        <h3>Regenerate Password</h3>
        <div class="inputs">
          <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div class="Fields">
              <div class="Fieldset">
                <input type="text" name="txtPassword" class="Before-FS" required="" autocomplete="off">
                <h1 class="Fs-H"><span>New password</span></h1>
                <label class="placeholder">New password</label>
              </div>
            </div>
            
            <div class="Fields">
              <div class="Fieldset">
                <input type="text" name="txtConfirmPassword" class="Before-FS" required="" >
                <h1 class="Fs-H"><span>confirm password</span></h1>
                <label class="placeholder">confirm password</label>
              </div>
            </div>

            </div>
              <button class="btnSubmit" name="btnSubmit">Submit</button>
          </div>
        </form>
        <?php
          
          include 'config.php';

          $user_email = $_GET['mail'];      // get the email from url
          if(isset($_POST['btnSubmit'])){
            $newpassword = md5($_POST['txtPassword']);      //new password
            $newConfirmPassword = md5($_POST['txtConfirmPassword']);    //new confirm password

           
            if($newpassword == $newConfirmPassword)     /// ceheck condition
            {
              // update password in database
              $update_password = "update tbl_users set user_password = '{$newpassword}' where user_mail = '{$user_email}'";
              
              $result_update_password = mysqli_query($conn,$update_password) or die("update_password query failed");

              // after successfully changed password it wil be redirect in login page
              header("Location: {$localhost}/user/html/");
            } 
            else
            {
              echo "<h4 style='text-align: center; color: red;'>Password doesn't match</h4>";
              
            }
          }
        ?>
</body>
</html>