<?php
include "../koneksi.php";
session_start();
$id_user = $_SESSION['id_user'];
$name = $_POST['name'];
$avatar = $_POST['avatar'];
$html_url = $_POST['html_url'];
$query = mysqli_query($connect, "insert into history(id_user,name_github,avatar,url,date,status) values ('$id_user', '$name', '$avatar', '$html_url',NOW(),0)");
?>
