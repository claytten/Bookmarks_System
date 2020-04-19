<?php
include "../koneksi.php";

$getIdHist = $_GET['id'];
$getIdUser = $_GET['id_user'];
if (!empty($_GET)) {
    $query = mysqli_query($connect,"DELETE FROM history WHERE id='$getIdHist'");
    if($query) {
        header('Location: ../../pages/admin/detail_history.php?id='.$getIdUser);
    } else {
        echo mysqli_error($connect);
    }
}


?>
