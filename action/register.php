<?php
include "koneksi.php";
if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password'])) {
    	//inisialisasi variabel
    	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $md5_password = md5($password);

        $query = mysqli_query($connect,"insert into users (name,username,password,roles,status) values ('$name', '$username', '$md5_password', 'user', 1 )");
		if($query) {
			header('Location: ../');
		} else {
			echo mysqli_error($connect);
		}

    }
    else {
    	$_SESSION['errorMessage'] = "Please insert again!";
    }
}
else {
	$_SESSION['errorMessage'] = "Please insert again!";
	header('Location: ./register.php');
}