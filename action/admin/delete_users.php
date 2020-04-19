<?php
include "../koneksi.php";

$getIdUser = $_GET['id'];
if (!empty($_GET)) {
    $query = mysqli_query($connect,"DELETE FROM users WHERE id='$getIdUser'");
    if($query) {
        header('Location: ../../pages/admin/account_settings.php');
    } else {
        echo mysqli_error($connect);
    }
}


?>
