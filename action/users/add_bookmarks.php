<?php
include"../koneksi.php";
session_start();
$id_user = $_SESSION['id_user'];
if (!empty($_POST)) {
    if (isset($_POST['id']) && isset($_POST['name_github']) && isset($_POST['avatar_github']) && isset($_POST['url_github'])) {
    	//inisialisasi variabel
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    	$name_github = filter_input(INPUT_POST, 'name_github', FILTER_SANITIZE_STRING);
        $avatar_github = filter_input(INPUT_POST, 'avatar_github', FILTER_SANITIZE_STRING);
        $url_github = filter_input(INPUT_POST, 'url_github', FILTER_SANITIZE_STRING);
        $query = mysqli_query($connect,"INSERT INTO bookmarks(id_user,name_github,avatar,url,id_directory,date,status) VALUES('$id_user','$name_github','$avatar_github','$url_github', 2, NOW(),1)");
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