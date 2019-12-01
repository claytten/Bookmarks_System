<?php
include"../koneksi.php";
session_start();

if (!empty($_POST)) {
    if (isset($_POST['name_github'])) {
    	//inisialisasi variabel
    	$id_user = $_SESSION['id_user'];
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    	$name_github = filter_input(INPUT_POST, 'name_github', FILTER_SANITIZE_STRING);

        $query = mysqli_query($connect,"UPDATE bookmarks SET name_github='$name_github' WHERE id='$id'  ");
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
else {
	$_SESSION['errorMessage'] = "Please insert again!";
	header('Location: ../../pages/users/bookmarks.php');
}

?>