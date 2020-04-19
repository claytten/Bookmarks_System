<?php
include"../koneksi.php";
session_start();
$id_user = $_GET['id'];
var_dump("lolol");
if (!empty($_POST)) {
    if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['roles']) && isset($_POST['status'])) {
    	//inisialisasi variabel
    	
    	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $role   = $_POST['roles'];
        $status = $_POST['status'];
        $md5_password = md5($password);

        $query = mysqli_query($connect,"UPDATE users SET name='$name', username='$username', password='$md5_password' , roles='$role', status='$status' WHERE id='$id_user'  ");
        var_dump($query);
		if($query) {
			
			header('Location: ../../pages/admin/account_settings.php');
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
	header('Location: ../../pages/admin/edit_account.php?id='.$id_user);
}

?>