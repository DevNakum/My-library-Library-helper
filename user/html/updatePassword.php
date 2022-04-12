<?php
    include 'config.php';
    if(isset($_POST['btnSubmit']))
    {
        
        $otp = $_POST['txtOtp'];
        $otpConfirm = $_POST['txtOtpConfirm'];
        $user_mail = $_POST['user_mail'];

        // echo $otp;
        if($otp == $otpConfirm)
        {
            
            echo '<input type="hidden" name="user_mail" value="'.$user_mail.'">';
            // die();
            header("Location: $hostname/user/html/regeneratePassword.php?mail=$user_mail");
        }
        else
            echo "otp is does not matched";
        
    }
?>