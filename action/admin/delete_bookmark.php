<?php
include "../koneksi.php";

$getIdBook = $_GET['id'];
$getIdUser = $_GET['id_user'];
if (!empty($_GET)) {
    $query = mysqli_query($connect,"DELETE FROM bookmarks WHERE id='$getIdBook'");
    if($query) {
        header('Location: ../../pages/admin/detail_bookmark.php?id='.$getIdUser);
    } else {
        echo mysqli_error($connect);
    }
}


?>
