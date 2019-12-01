<?php
include"../koneksi.php";

if (!empty($_POST)) {
    if (isset($_POST['bookmark']) ) {
    	//inisialisasi variabel
    	$folder = filter_input(INPUT_POST, 'bookmark', FILTER_SANITIZE_STRING);

        $query = mysqli_query($connect,"INSERT INTO directories(folder) VALUES('$folder')");
		if($query) {
			header('Location: ../../pages/users/bookmarks.php');
		} else {
			echo mysqli_error($connect);
		}

    }
    else {
    	$_SESSION['errorMessage'] = "Please insert agains!";
    }
}