<?php
include "../../koneksi.php";
session_start();
$id_user = $_SESSION['id_user'];
if (!empty($_POST)) {
    if (isset($_POST['name_github']) ) {
    	//inisialisasi variabel
    	$name = filter_input(INPUT_POST, 'name_github', FILTER_SANITIZE_STRING);
		header("Location: ../../../pages/users/index.php?name_github='$name' ");

    }
    else {
    	$_SESSION['errorMessage'] = "Please insert again!";
    }
}
else {
	$_SESSION['errorMessage'] = "Please insert again!";
	header('Location: ../../../');
}