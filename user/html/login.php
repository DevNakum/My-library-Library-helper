<?php
    echo "On login page!";
    if (isset($_POST['btnLogin'])) {
        include 'config.php';
       
        $username = mysqli_real_escape_string($conn, $_POST['txtUsername']);
        $password = md5($_POST['txtPassword']);
        
        $sql = "select user_id,user_name,user_role from tbl_users where user_name = '{$username}' and user_password = '{$password}'";

        // echo $sql;
        // die();
        $result = mysqli_query($conn, $sql) or die("Queury Unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["user_name"] = $row['user_name'];
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["user_role"] = $row['user_role'];
                // echo "{$hostname}/user/html/userProfile.php";
                header("Location: {$hostname}/user/html/userProfile.php");
            }
        }
    }
?>