<?php
    include 'config.php';
    if(isset($_POST['btnSubmit']))
    {
        
        $otp = $_POST['txtOtp'];        // it is generate otp
        $otpConfirm = $_POST['txtOtpConfirm'];      // get the otp from user
        $user_mail = $_POST['user_mail'];       // user's email

        // echo $otp;
        if($otp == $otpConfirm)     // check is otp match or not
        {
            
            echo '<input type="hidden" name="user_mail" value="'.$user_mail.'">';
            // die();
            header("Location: {$hostname}/user/html/regeneratePassword.php?mail=$user_mail");
        }
        else
            echo "<h4 style='text-align: center; color: red;'>otp is does not matched</h4>";
            
    }
?>