<?php
include "./koneksi.php";
session_start();
if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['password'])
        && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $md5_password = md5($password);
        $query = "SELECT * FROM users WHERE users.username=\"" . $username . "\" AND users.password=\"" . $md5_password . "\"";
        $result = "";
        if (mysqli_error($connect)) {
            echo(mysqli_error($connect));
            die("Connection Error!");
        }
        $result = mysqli_query($connect, $query);
        
        $rows = mysqli_fetch_array($result);
        $rowlen = count($rows);
        if ($rowlen>0) {
            $_SESSION['user_id'] = $rows['id'];
            if ($rows['roles'] == "user") {
                $_SESSION['name'] = $rows['name'];
                $_SESSION['roles'] = "users";
                $_SESSION['id_user'] = $rows['id'];
            } else {
                $_SESSION['id_user'] = $rows['id'];
                $_SESSION['name'] = $rows['name'];
                $_SESSION['roles'] = "admin";
            }
        } else  {
            $_SESSION['errorMessage'] = "Data Not Found";
        }
    } else  {
        $_SESSION['errorMessage'] = "Incorrect your username/password";
    }
}
else  {
    $_SESSION['errorMessage'] = "Incorrect your username/password";
}
header("Location: ../");