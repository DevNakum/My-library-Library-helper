<?php
    include 'config.php';

    $email = mysqli_real_escape_string($conn,$_POST['txtEmail']);      #for protection
    $username = mysqli_real_escape_string($conn,$_POST['txtUsername']);
    $password = mysqli_real_escape_string($conn,md5($_POST['txtPassword']));
    $confirmPassword = mysqli_real_escape_string($conn,md5($_POST['txtConfirmPassword']));

    if(isset($_POST['btnSignup']))
    {
        if($password == $confirmPassword)
        {
            $sql = "select user_id from tbl_users where user_id = '{$username}'";
            $result = mysqli_query($conn,$sql) or die("Query unsuccessful");

            if(mysqli_num_rows($result)>0)
            {
                echo "<p style='color:red; text-align:center; margin: 10px 0;'>User name already exists.</p>";
            }
            else
            {
                $sql1 = "insert into tbl_users (user_id,user_mail,user_password,user_role) values ('{$username}','{$email}','{$password}',0)";
                if(mysqli_query($conn,$sql1))
                {
                    header("Location: {$hostname}/user/html/");
                }
            }
        }
        else
        {
            echo "dev";
        }
    }
?>