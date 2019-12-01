<?php
include "../koneksi.php";
if (!empty($_POST)) {
    if($_POST['roles'] == "admin") {
        if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['roles'])) {
            //inisialisasi variabel
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $roles = filter_input(INPUT_POST, 'roles', FILTER_SANITIZE_STRING);
            $md5_password = md5($password);

            $query = mysqli_query($connect,"insert into users (name,username,password,roles,status) values ('$name', '$username', '$md5_password', '$roles', 1 )");
            if($query) {
                header('Location: ../../');
            } else {
                echo mysqli_error($connect);
            }

        }
        else {
            $_SESSION['errorMessage'] = "Please insert again!";
        }
    } else {
        if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['roles']) ) {
            //inisialisasi variabel
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $roles = filter_input(INPUT_POST, 'roles', FILTER_SANITIZE_STRING);
            $md5_password = md5($password);

            $query = mysqli_query($connect,"insert into users (name,username,password,roles,status) values ('$name', '$username', '$md5_password', '$roles', 1 )");
            if($query) {
                header('Location: ../../');
            } else {
                echo mysqli_error($connect);
            }

        }
        else {
            $_SESSION['errorMessage'] = "Please insert again!";
        }
    }
    
}
else {
	$_SESSION['errorMessage'] = "Please insert again!";
	header('Location: ../pages/admin/new_account.php');
}