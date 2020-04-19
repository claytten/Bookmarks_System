<?php
include"../koneksi.php";
session_start();

if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password'])) {
    	//inisialisasi variabel
    	$id_user = $_SESSION['id_user'];
    	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $md5_password = md5($password);

		$query = mysqli_query($connect,"UPDATE users SET name='$name', username='$username', password='$md5_password' WHERE id='$id_user'  ");
		var_dump($_POST['username']);
		if($query) {
			$_SESSION['name'] = $name;
			header('Location: ../../pages/users/profile.php');
		} else {
			echo mysqli_error($connect);
		}

    }
    else {
    	$_SESSION['errorMessage'] = "Please insert agains!";
    }
}
else {
	$_SESSION['errorMessage'] = "Please insert again!";
	header('Location: ../../pages/users/profile.php');
}

?>