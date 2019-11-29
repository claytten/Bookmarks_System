<?php
session_start();
if(empty($_SESSION["user_id"])) {
    $_SESSION["errorMessage"] = "Sorry you can enter this page";
    header('Location: ../../');
}
?>