<?php
        include 'config.php';

        if(isset($_POST['btnSignup'])){

            if(!filter_var($_POST['txtEmail'],FILTER_VALIDATE_EMAIL)) {
                // echo "<h2 style='color: red; text-align: center; margin-top: 5%;'>Emai is invalid!</h2>";
                echo "<script> 
                    alert('Email is invalid');
                    window.location = '{$hostname}/admin/html/';
                </script>";
                    // die();
            } else {

            $email = mysqli_real_escape_string($conn,$_POST['txtEmail']);      #for protection
            $username = mysqli_real_escape_string($conn,$_POST['txtUsername']);
            $password = mysqli_real_escape_string($conn,md5($_POST['txtPassword']));
            $confirmPassword = mysqli_real_escape_string($conn,md5($_POST['txtConfirmPassword']));

            // $pattern = "/[a-zA-Z]*[0-9][0-9][a-zA-Z]+[0-9][0-9][0-9]/gm";
            // if(preg_match('/[a-zA-Z]*[0-9][0-9][a-zA-Z]+[0-9][0-9][0-9]/m', $username)) {
            //     echo "<script> 
            //         alert('User id is invalid');
            //         window.location = '{$hostname}/admin/html/';
            //     </script>";
            // } else {
                
            // }

            if(isset($_POST['btnSignup']))
            {
                if($password == $confirmPassword)
                {
                    $sql = "select user_id from tbl_users where user_id = '{$username}'";
                    $result = mysqli_query($conn,$sql) or die("Query unsuccessful");

                    if(mysqli_num_rows($result)>0)
                    {
                        // echo "<h2 style='color:red; text-align:center; margin: 5%;'>User name already exists.</h2>";
                        echo "<script> 
                            alert('User name already exists.');
                            window.location = '{$hostname}/admin/html/';
                        </script>";
                    }
                    else
                    {
                        $sql1 = "insert into tbl_users (user_id,user_mail,user_password,user_role) values ('{$username}','{$email}','{$password}',0)";
                        if(mysqli_query($conn,$sql1))
                        {
                            header("Location: {$hostname}/admin/html/");
                        }
                    }
            }
            else
            {
                // echo "<h2 style='color: red; text-align: center; margin-top: 5%;'>Password doesn't matches!</h2>";
                echo "<script> 
                    alert('Password doesn't matches!');
                    window.location = '{$hostname}/admin/html/';
                </script>";
            }
        }
      }
    }
    ?>